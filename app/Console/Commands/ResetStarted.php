<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ResetStarted extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'started:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'reset started';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $path = config('axieon.backlinks_csvs_path');
        $files = array_diff(scandir($path), array('..', '.'));
//        dd($files);
        $domains_crawled = [];
        $domains_from_serp = DB::table('domains')
            ->where('is_from_serp', 1)
            ->pluck('id', 'domain');
//        $domains_bu = DB::table('domains')
//            ->where('is_major', 1)
//            ->orWhere('is_minor', 1)
//            ->orWhere('is_local', 1)
//            ->pluck('id', 'domain');

        foreach($files as $file) {
            if(strstr($file, '.crdownload') !== false) {
                continue;
            }
            $tld_to = substr($file, 0, strpos($file, '-backlinksimilarlinks-subdomains-live-'));
            if(!$tld_to) {
                continue;
            }
            $domains_crawled[] = $tld_to;
            $domain_backlinks_count = 0;

            continue;

            if(!isset($domains_from_serp[$tld_to])) {
//                $this->comment("Domain not found in SERP domains {$tld_to}");
                continue;
            }
            $domain_to_id = $domains_from_serp[$tld_to];

//            if(DB::table('domain_backlinks')->where([
//                'domain_id' => $domain_to_id
//            ])->first()) {
//                continue;
//            }

//            DB::table('domains')->where('domain', $domain)->update(['is_started' => 1]);

            if (($handle = fopen($path.$file, "r")) === FALSE) {
                $this->comment('Can not open file '.$path.$file);
                continue;
            }

            $linecount = 0;
            while(fgets($handle) !== false){
                $linecount++;
            }
            if($linecount > 1000000) {
                $this->comment($tld_to.' - '.$linecount);
            }

            fclose($handle);

        }
//        dd($domains_crawled);

        $domains = DB::table('domains')->where('is_started', 1)->get();
        foreach ($domains as $domain) {
            if(!in_array($domain->domain, $domains_crawled)) {
//                if($domain->domain == 'youtube.com') {
//                    continue;
//                }
                DB::table('domains')->where('id', $domain->id)->update(['is_started' => 0]);
//                echo $domain->domain."\n";
            }
        }

    }
}
