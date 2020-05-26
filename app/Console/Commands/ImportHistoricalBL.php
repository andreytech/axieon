<?php

namespace App\Console\Commands;

use App\Page;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
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
        $path = config('axieon.backlins_csvs_path');
        $files = array_diff(scandir($path), array('..', '.'));
//        dd($files);
        $domains_crawled = [];
        $domains_from_serp = DB::table('domains')
            ->where('is_from_serp', 1)
            ->pluck('id', 'domain');
        $domains_bu = DB::table('domains')
            ->where('is_major', 1)
            ->orWhere('is_minor', 1)
            ->orWhere('is_local', 1)
            ->pluck('id', 'domain');

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules(); //$rules is a Pdp\Rules object

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

            if(!isset($domains_from_serp[$tld_to])) {
//                $this->comment("Domain not found in SERP domains {$tld_to}");
                continue;
            }
            $domain_to_id = $domains_from_serp[$tld_to];

            if(DB::table('domain_backlinks')->where([
                'domain_id' => $domain_to_id
            ])->first()) {
                continue;
            }

//            DB::table('domains')->where('domain', $domain)->update(['is_started' => 1]);

            if (($handle = fopen($path.$file, "r")) === FALSE) {
                $this->comment('Can not open file '.$path.$file);
                continue;
            }

//            $this->comment($tld_to);

            fgetcsv($handle, "\t");
            while (($data = fgetcsv($handle)) !== FALSE) {
                if(empty($data[5]) || empty($data[9])) {
                    continue;
                }

                $domain_from = parse_url($data[5], PHP_URL_HOST);
                $path_from = parse_url($data[5], PHP_URL_PATH);

                $domain_found_in_bu = false;
                foreach ($domains_bu as $domain_bu => $domain_id) {
                    if (strpos($domain_from, $domain_bu) !== false) {
                        $domain_found_in_bu = true;
                        break;
                    }
                }
                if(!$domain_found_in_bu) {
                    continue;
                }

                $domain_to = parse_url($data[9], PHP_URL_HOST);
                $path_to = parse_url($data[9], PHP_URL_PATH);

                $tld_pos = strpos($domain_to, $tld_to);
                if ($tld_pos === false) {
                    $this->comment("Domain not found in Link URL for {$tld_to}|{$data[9]}");
                    continue;
                }
                $subdomain_to = '';
                if($tld_pos !== 0) {
                    $subdomain_to = substr($domain_to, 0, $tld_pos - 1);
                }
//                dd($subdomain_to);

                $pageToModel = Page::query()->where([
                    'domain_id' => $domain_to_id,
                    'subdomain' => (string)$subdomain_to,
                    'path' => $path_to,
                ])->first();

                if(!$pageToModel) {
                    continue;
                }

                $domain_obj = $rules->resolve($domain_from);
                $tld_from = $domain_obj->getRegistrableDomain();
                $subdomain_from = $domain_obj->getSubDomain();
                if (!$tld_from) {
                    $this->comment("TLD not found for {$domain_from}|{$data[5]}");
                    continue;
                }
                if(!isset($domains_bu[$tld_from])) {
                    continue;
                }

                $domain_from_id = $domains_bu[$tld_from];

                $domain_backlinks_count++;

                $pageFromModel = Page::query()->firstOrCreate([
                    'domain_id' => $domain_from_id,
                    'subdomain' => (string)$subdomain_from,
                    'path' => $path_from,
                ],
                    ['is_from_serp' => 0]
                );

//                $first_seen = Carbon::parse($data[15]);
//                dd($data[15], $first_seen->toDateTimeString());

                $first_seen = date("Y-m-d H:i:s");
                if(trim($data[15])) {
                    if(strtotime($data[15]) !== false) {
                        $first_seen = trim($data[15]);
                    }
                }

                DB::table('backlinks')->insert([
                    'page_from' => $pageFromModel->id,
                    'page_to' => $pageToModel->id,
                    'referring_page_title' => trim($data[6]),
                    'link_anchor' => trim($data[11]),
                    'is_dofollow' => (strstr($data[13], 'Dofollow') !== false ? 1 : 0),
                    'first_seen' => $first_seen,
                ]);

            }
            fclose($handle);

            DB::table('domain_backlinks')->insert([
                'domain_id' => $domain_to_id,
                'backlinks_count' => $domain_backlinks_count,
            ]);

        }
//        dd($domains_crawled);

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
