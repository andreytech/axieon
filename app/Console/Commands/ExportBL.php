<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportBL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bl:export';

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
        $bls = DB::select("
        SELECT k.keyword, sr.position 
            , CONCAT(page_from.subdomain, '.', domain_from.domain, page_from.path) AS page_from
            , CONCAT(page_to.subdomain, '.', domain_to.domain, page_to.path) AS page_to
        FROM keywords k
        INNER JOIN serps s ON s.keyword_id = k.id
        INNER JOIN serp_results sr ON s.id = sr.serp_id
        INNER JOIN pages page_to ON sr.page_id = page_to.id
        INNER JOIN domains domain_to ON page_to.domain_id = domain_to.id
        INNER JOIN backlinks b ON b.page_to = page_to.id
        INNER JOIN pages page_from ON b.page_from = page_from.id
        INNER JOIN domains domain_from ON page_from.domain_id = domain_from.id
        ORDER BY page_to.id, k.id
        LIMIT 1000
        ");
//        dd($bls);
        $fp = fopen('bls_export.csv', 'w');
        fputcsv($fp, ['keyword', 'position', 'link_from', 'link_to']);

        foreach ($bls as $bl) {
            $bl = (array) $bl;
            $bl['page_from'] = trim($bl['page_from'], '.');
            $bl['page_to'] = trim($bl['page_to'], '.');
            fputcsv($fp, $bl);
        }

        fclose($fp);
    }
}
