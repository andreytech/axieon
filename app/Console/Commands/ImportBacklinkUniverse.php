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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $csvFile = 'storage/Backlink (Publisher) Universe (BU) [ALPHA] - A1_ Major Publication (MP).csv';
        $file_handle = fopen($csvFile, 'r');
        if(!$file_handle) {
            return;
        }

        fgetcsv($file_handle);

//        $line_of_text = fgetcsv($file_handle);
//        var_dump($line_of_text);
//        exit;

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules(); //$rules is a Pdp\Rules object

        $universe = 'is_major';

        while (!feof($file_handle)) {
            $line_of_text = fgetcsv($file_handle);
            if(empty(trim($line_of_text[1]))) {
                continue;
            }

            $domain = parse_url($line_of_text[1], PHP_URL_HOST);
            $domain_obj = $rules->resolve($domain); //$domain is a Pdp\Domain object
            $tld = $domain_obj->getRegistrableDomain();

            if(empty($tld)) {
                continue;
            }
            echo "Can't find tld for {$line_of_text[1]}\n";

//            $subdomain = $domain_obj->getSubDomain();

            $existing_domain = DB::table('domains')->where('domain', $tld)->first();
            if($existing_domain) {
                DB::table('domains')->where('id', $existing_domain->id)->update([
                    $universe => 1,
                    'brand_name' => $line_of_text[0],
                ]);
            }else {
                DB::table('domains')->insert([
                    'domain' => $tld,
                    $universe => 1,
                    'brand_name' => $line_of_text[0],
                ]);
            }

//            var_dump($line_of_text);exit;

        }
        fclose($file_handle);

    }
}
