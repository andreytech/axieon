<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Pdp\Cache;
use Pdp\CurlHttpClient;
use Pdp\Manager;

class ImportBacklinkUniverse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backlinkuniverse:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle() {
        $BLUs = [
            'is_major' => 'storage/Backlink (Publisher) Universe (BU) [ALPHA] - A1_ Major Publication (MP).csv',
            'is_minor' => 'storage/Backlink (Publisher) Universe (BU) [ALPHA] - A1_ Influencer Publication (IP).csv',
            'is_local' => 'storage/Backlink (Publisher) Universe (BU) [ALPHA] - A1_ Local Publication (LP).csv',
        ];

        foreach ($BLUs as $universe => $path) {
            $this->handleBU($path, $universe);
        }

    }

    public function handleBLU($filepath, $universe)
    {
        $file_handle = fopen($filepath, 'r');
        if(!$file_handle) {
            return;
        }

        fgetcsv($file_handle);

//        $line_of_text = fgetcsv($file_handle);
//        var_dump($line_of_text);
//        exit;

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules(); //$rules is a Pdp\Rules object

        while (!feof($file_handle)) {
            $line_of_text = fgetcsv($file_handle);
            if(empty(trim($line_of_text[1]))) {
                continue;
            }

            $domain = trim($line_of_text[1]);
            if(strpos($line_of_text[1], 'http') !== 0) {
                $domain = 'http://'.trim($line_of_text[1]);
            }

            $domain = parse_url($domain, PHP_URL_HOST);
            $domain_obj = $rules->resolve($domain); //$domain is a Pdp\Domain object
            $tld = $domain_obj->getRegistrableDomain();

            if(empty($tld)) {
                $this->comment("tld empty for ".$domain." ". $line_of_text[1]);
                continue;
            }

            $brand_name = trim($line_of_text[0]);

//            $subdomain = $domain_obj->getSubDomain();

            $existing_domain = DB::table('domains')->where('domain', $tld)->first();
            if($existing_domain) {
                DB::table('domains')->where('id', $existing_domain->id)->update([
                    $universe => 1,
                    'brand_name' => $brand_name,
                ]);
            }else {
                DB::table('domains')->insert([
                    'domain' => $tld,
                    $universe => 1,
                    'brand_name' => $brand_name,
                ]);
            }

//            dd($line_of_text);exit;

        }
        fclose($file_handle);

    }
}
