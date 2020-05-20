<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Pdp\Cache;
use Pdp\CurlHttpClient;
use Pdp\Manager;

class ImportHistoricalBL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'historicalbl:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import historical backlinks from CSVs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = 'C:\Users\Presto\Downloads\\';
        $files = array_diff(scandir($path), array('..', '.'));
        $domains_crawled = [];
        $domains = DB::table('domains')->pluck('id', 'domain');
//        var_dump($domains);
//        exit;

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules(); //$rules is a Pdp\Rules object

        foreach($files as $file) {
            if(strstr($file, '.crdownload') !== false) {
                continue;
            }
            $domain = substr($file, 0, strpos($file, '-backlinksimilarlinks-subdomains-live-'));
            if(!$domain) {
                continue;
            }
            $domains_crawled[] = $domain;


            if (($handle = fopen($path.$file, "r")) !== FALSE) {
                fgetcsv($handle, 1000, "\t");
                while (($data = fgetcsv($handle, 1000)) !== FALSE) {
                    var_dump($data);exit;

                    $domain_obj = $rules->resolve($domain->domain); //$domain is a Pdp\Domain object
                    $tld = $domain_obj->getRegistrableDomain();
                    $subdomain = $domain_obj->getSubDomain();
                    if (!$tld) {
                        echo "Not found for {$domain->domain}\n";
                        continue;
                    }

                }
                fclose($handle);
            }

        }
//        var_dump($files);
//        exit;

        $domains = DB::table('domains')->where('is_started', 1)->get();
        foreach ($domains as $domain) {
            if(!in_array($domain->domain, $domains_crawled)) {
                if($domain->domain == 'youtube.com') {
                    continue;
                }
//                DB::table('domains')->where('id', $domain->id)->update(['is_started' => 0]);
//                echo $domain->domain."\n";
            }
        }

    }
}
