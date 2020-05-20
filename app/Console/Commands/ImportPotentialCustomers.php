<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportPotentialCustomers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'potentialcustomers:import';

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
        $csvFile = 'storage/Search Index Domains - Insurance Services.csv';
        $file_handle = fopen($csvFile, 'r');
        if(!$file_handle) {
            return;
        }

        // Read headings
        fgetcsv($file_handle);

        $universe = 'is_potential_customer';

        while (!feof($file_handle)) {
            $line_of_text = fgetcsv($file_handle);

            $domain = trim($line_of_text[2]);
            $brand_name = trim($line_of_text[1]);

            $existing_domain = DB::table('domains')->where('domain', $domain)->first();
            if($existing_domain) {
                DB::table('domains')->where('id', $existing_domain->id)->update([
                    $universe => 1,
                    'brand_name' => $brand_name,
                ]);
            }else {
                DB::table('domains')->insert([
                    'domain' => $domain,
                    $universe => 1,
                    'brand_name' => $brand_name,
                ]);
            }
        }
        fclose($file_handle);

    }
}
