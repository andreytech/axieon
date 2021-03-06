<?php

namespace App\Console\Commands;

use App\Domain;
use App\Page;
use App\Serp;
use App\Keyword;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Pdp\Cache;
use Pdp\CurlHttpClient;
use Pdp\Manager;

class ImportSERP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'serps:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import SERP from CSV';

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
        $paths = [
            'storage/SERPs.csv',
        ];

        foreach ($paths as $path) {
            $this->handleSERPFile($path);
        }
    }

    private function handleSERPFile($filepath) {
        $file_handle = fopen($filepath, 'r');
        if(!$file_handle) {
            return;
        }

        // Read headings
        fgetcsv($file_handle);

//        $line_of_text = fgetcsv($file_handle);
//        var_dump($line_of_text);
//        exit;

        $serp_id = 0;
        $position = 1;
        $keyword = '';
        $keywords_count = 0;

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules(); //$rules is a Pdp\Rules object

        while (($line_of_text = fgetcsv($file_handle)) !== FALSE) {
//            if(!in_array($line_of_text[22], ['Organic'])) {
//                continue;
//            }
//            var_dump($line_of_text);exit;
            $current_keyword = trim($line_of_text[1]);
            $url = trim($line_of_text[2]);

            if($keyword != $current_keyword) {
                $keywords_count++;
                $position = 1;
            }
            $keyword = $current_keyword;
            $domain = parse_url($url, PHP_URL_HOST);
            $path = parse_url($url, PHP_URL_PATH);

            $domain_obj = $rules->resolve($domain); //$domain is a Pdp\Domain object
            $tld = $domain_obj->getRegistrableDomain();
            $subdomain = $domain_obj->getSubDomain();
            if(!$tld) {
                echo "Not found for {$domain}\n";
                continue;
            }

            $domainModel = Domain::query()->firstOrCreate(
                ['domain' => $tld],
                ['is_from_serp' => 1]
            );
            $pageModel = Page::query()->firstOrCreate([
                'domain_id' => $domainModel->id,
                'subdomain' => (string)$subdomain,
                'path' => $path
            ],
                ['is_from_serp' => 1]
            );

            if($position === 1) {
                $keywordModel = Keyword::query()->firstOrCreate(['keyword' => $keyword]);
                $serp = new Serp();
                $serp->keyword_id = $keywordModel->id;
                $serp->save();
                $serp_id = $serp->id;
            }

            DB::table('serp_results')->insert([
                'serp_id' => $serp_id,
                'page_id' => $pageModel->id,
                'position' => $position
            ]);

            $position++;
        }
        fclose($file_handle);

        $this->comment('Processed keywords:'.$keywords_count);
    }
}
