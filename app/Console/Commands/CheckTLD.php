<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Pdp\Cache;
use Pdp\CurlHttpClient;
use Pdp\Manager;
use Pdp\Rules;

class CheckTLD extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tld:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check TLD';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    function get_domain($domain, $debug = false)
    {
        $original = $domain = strtolower($domain);

        if (filter_var($domain, FILTER_VALIDATE_IP)) { return $domain; }

        $debug ? print('<strong style="color:green">&raquo;</strong> Parsing: '.$original) : false;

        $arr = array_slice(array_filter(explode('.', $domain, 4), function($value){
            return $value !== 'www';
        }), 0); //rebuild array indexes

        if (count($arr) > 2)
        {
            $count = count($arr);
            $_sub = explode('.', $count === 4 ? $arr[3] : $arr[2]);

            $debug ? print(" (parts count: {$count})") : false;

            if (count($_sub) === 2) // two level TLD
            {
                $removed = array_shift($arr);
                if ($count === 4) // got a subdomain acting as a domain
                {
                    $removed = array_shift($arr);
                }
                $debug ? print("<br>\n" . '[*] Two level TLD: <strong>' . join('.', $_sub) . '</strong> ') : false;
            }
            elseif (count($_sub) === 1) // one level TLD
            {
                $removed = array_shift($arr); //remove the subdomain

                if (strlen($_sub[0]) === 2 && $count === 3) // TLD domain must be 2 letters
                {
                    array_unshift($arr, $removed);
                }
                else
                {
                    // non country TLD according to IANA
                    $tlds = array(
                        'aero',
                        'arpa',
                        'asia',
                        'biz',
                        'cat',
                        'com',
                        'coop',
                        'edu',
                        'gov',
                        'info',
                        'jobs',
                        'mil',
                        'mobi',
                        'museum',
                        'name',
                        'net',
                        'org',
                        'post',
                        'pro',
                        'tel',
                        'travel',
                        'xxx',
                    );

                    if (count($arr) > 2 && in_array($_sub[0], $tlds) !== false) //special TLD don't have a country
                    {
                        array_shift($arr);
                    }
                }
                $debug ? print("<br>\n" .'[*] One level TLD: <strong>'.join('.', $_sub).'</strong> ') : false;
            }
            else // more than 3 levels, something is wrong
            {
                for ($i = count($_sub); $i > 1; $i--)
                {
                    $removed = array_shift($arr);
                }
                $debug ? print("<br>\n" . '[*] Three level TLD: <strong>' . join('.', $_sub) . '</strong> ') : false;
            }
        }
        elseif (count($arr) === 2)
        {
            $arr0 = array_shift($arr);

            if (strpos(join('.', $arr), '.') === false
                && in_array($arr[0], array('localhost','test','invalid')) === false) // not a reserved domain
            {
                $debug ? print("<br>\n" .'Seems invalid domain: <strong>'.join('.', $arr).'</strong> re-adding: <strong>'.$arr0.'</strong> ') : false;
                // seems invalid domain, restore it
                array_unshift($arr, $arr0);
            }
        }

        $debug ? print("<br>\n".'<strong style="color:gray">&laquo;</strong> Done parsing: <span style="color:red">' . $original . '</span> as <span style="color:blue">'. join('.', $arr) ."</span><br>\n") : false;

        return join('.', $arr);
    }



    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $urls = array(
            'www.example.com' => 'example.com',
            'example.com' => 'example.com',
            'example.com.br' => 'example.com.br',
            'www.example.com.br' => 'example.com.br',
            'www.example.gov.br' => 'example.gov.br',
            'localhost' => 'localhost',
            'www.localhost' => 'localhost',
            'subdomain.localhost' => 'localhost',
            'www.subdomain.example.com' => 'example.com',
            'subdomain.example.com' => 'example.com',
            'subdomain.example.com.br' => 'example.com.br',
            'www.subdomain.example.com.br' => 'example.com.br',
            'www.subdomain.example.biz.br' => 'example.biz.br',
            'subdomain.example.biz.br' => 'example.biz.br',
            'www.honda.com.br' => 'honda.com.br',
            'subdomain.example.net' => 'example.net',
            'www.subdomain.example.net' => 'example.net',
            'www.subdomain.example.co.kr' => 'example.co.kr',
            'subdomain.example.co.kr' => 'example.co.kr',
            'example.co.kr' => 'example.co.kr',
            'example.jobs' => 'example.jobs',
            'www.example.jobs' => 'example.jobs',
            'subdomain.example.jobs' => 'example.jobs',
            'insane.subdomain.example.jobs' => 'example.jobs',
            'insane.subdomain.example.com.br' => 'example.com.br',
            'www.doubleinsane.subdomain.example.com.br' => 'example.com.br',
            'www.subdomain.example.jobs' => 'example.jobs',
            'test' => 'test',
            'www.test' => 'test',
            'subdomain.test' => 'test',
            'www.detran.sp.gov.br' => 'detran.sp.gov.br',
            'www.mp.sp.gov.br' => 'sp.gov.br',
            'ny.library.museum' => 'library.museum',
            'www.ny.library.museum' => 'library.museum',
            'ny.ny.library.museum' => 'library.museum',
            'www.library.museum' => 'library.museum',
            'info.abril.com.br' => 'abril.com.br',
            'dev.example.ca' => 'example.ca',
            'dev.example.io' => 'example.io',
//            '127.0.0.1' => '127.0.0.1',
//            '::1' => '::1',
        );

        $failed = 0;
        $total = count($urls);

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules(); //$rules is a Pdp\Rules object

        foreach ($urls as $from => $expected)
        {
            $domain_obj = $rules->resolve($from); //$domain is a Pdp\Domain object
            $from = $domain_obj->getRegistrableDomain();
//            $from = self::get_domain($from, true);
            if ($from !== $expected)
            {
                $failed++;
                print("expected {$from} to be {$expected}\n");
            }
        }

        if ($failed)
        {
            print("{$failed} tests failed out of {$total}");
        }
        else
        {
            print("Success");
        }
    }
}
