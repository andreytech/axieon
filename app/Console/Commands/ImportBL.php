<?php

namespace App\Console\Commands;

use App\Domain;
use App\Page;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Pdp\Cache;
use Pdp\CurlHttpClient;
use Pdp\Manager;

class ImportBL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bl:import';

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
//        $domains_from_serp = DB::table('domains')
//            ->where('is_from_serp', 1)
//            ->pluck('id', 'domain');
//        $domains_bu = DB::table('domains')
//            ->where('is_major', 1)
//            ->orWhere('is_minor', 1)
//            ->orWhere('is_local', 1)
//            ->pluck('id', 'domain');

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules();

        $filepath = 'storage/withjoy.csv';
        $file_handle = fopen($filepath, 'r');
        if(!$file_handle) {
            return;
        }

        // Read headings
        fgetcsv($file_handle);

        $domain_backlinks_count = 0;

        while (($data = fgetcsv($file_handle)) !== FALSE) {
//            dd($data);

            if(empty($data[0]) || empty($data[3])) {
                continue;
            }
            $link_from = trim($data[0]);
            $referring_page_title = trim($data[1]);
            $link_to = trim($data[2]);
            $link_anchor = trim($data[3]);
            $following_terms = trim($data[4]);
            $first_seen = trim($data[5]);

            // TLD from
            $domain_from = parse_url($link_from, PHP_URL_HOST);
//                $domain_from = mb_convert_encoding($domain_from, 'UTF-8');
            $path_from = parse_url($link_from, PHP_URL_PATH);
//                $path_from = mb_convert_encoding($path_from, 'UTF-8');

            $domain_obj = $rules->resolve($domain_from);
            $tld_from = $domain_obj->getRegistrableDomain();
            $subdomain_from = $domain_obj->getSubDomain();
            if (!$tld_from) {
                $this->comment("TLD not found for {$domain_from}|{$link_from}");
                continue;
            }

            // TLD to
            $domain_to = parse_url($link_to, PHP_URL_HOST);
//                $domain_from = mb_convert_encoding($domain_from, 'UTF-8');
            $path_to = parse_url($link_to, PHP_URL_PATH);
//                $path_from = mb_convert_encoding($path_from, 'UTF-8');

            $domain_obj = $rules->resolve($domain_to);
            $tld_to = $domain_obj->getRegistrableDomain();
            $subdomain_to = $domain_obj->getSubDomain();
            if (!$tld_to) {
                $this->comment("TLD not found for {$domain_to}|{$link_to}");
                continue;
            }

            $domainModel = Domain::query()->firstOrCreate(
                ['domain' => $tld_to],
                ['is_from_serp' => 0]
            );

            $pageToModel = $this->_addPage([
                'domain_id' => $domainModel->id,
                'subdomain' => (string)$subdomain_to,
                'path' => $path_to,
            ]);

            if(!$pageToModel) {
                continue;
            }

            $domainModel = Domain::query()->firstOrCreate(
                ['domain' => $tld_from],
                ['is_from_serp' => 0]
            );

            $pageFromModel = $this->_addPage([
                'domain_id' => $domainModel->id,
                'subdomain' => (string)$subdomain_from,
                'path' => $path_from,
            ]);

//                $first_seen = Carbon::parse($data[15]);
//                dd($data[15], $first_seen->toDateTimeString());


            if($first_seen) {
//                $date = date_create_from_format('d-m-y H:i', $first_seen);
//                if($date !== false) {
//                    $first_seen = date_format($date, 'Y-m-d H:i:s');
//                }else {
//                    $first_seen = date("Y-m-d H:i:s");
//                }
                $first_seen = date("Y-m-d H:i:s", strtotime($first_seen));
            }else {
                $first_seen = date("Y-m-d H:i:s");
            }
//            dd($first_seen);

            $domain_backlinks_count++;


            $referring_page_title = mb_convert_encoding($referring_page_title, 'UTF-8');
            $link_anchor = mb_convert_encoding($link_anchor, 'UTF-8');

            DB::table('backlinks')->insert([
                'page_from' => $pageFromModel->id,
                'page_to' => $pageToModel->id,
                'referring_page_title' => $referring_page_title,
                'link_anchor' => $link_anchor,
                'is_dofollow' => (strstr($following_terms, 'Dofollow') !== false ? 1 : 0),
                'first_seen' => $first_seen,
            ]);

        }
        fclose($file_handle);

    }

    private function _addPage($data) {
        try {
            $is_encoding_error = false;
            $pageModel = Page::query()->firstOrCreate($data,
                ['is_from_serp' => 0]
            );
        }catch (QueryException $e) {
            var_dump($e->getCode());
            if( in_array($e->getCode(), ['HY000', '22007']) ) {
                $this->comment("Encoding error {$data['path']}");
                $is_encoding_error = true;
            }else {
                throw $e;
            }
        }

        if($is_encoding_error) {
            $path = mb_convert_encoding($data['path'], 'UTF-8');
            $subdomain = mb_convert_encoding($data['subdomain'], 'UTF-8');
            $pageModel = Page::query()->firstOrCreate([
                'domain_id' => $data['domain_id'],
                'subdomain' => (string)$subdomain,
                'path' => $path,
            ],
                ['is_from_serp' => 0]
            );
        }

        return $pageModel;
    }
}
