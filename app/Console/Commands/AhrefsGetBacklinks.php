<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use ahrefs\AhrefsApiPhp\AhrefsAPI;

class AhrefsGetBacklinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backlinks:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get backlinks via ahrefs API';

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
        $Ahrefs = new AhrefsAPI('0796a3288729598fc9668824c55332552181c38b', $debug = false);
        $Ahrefs->set_target('ahrefs.com')->mode_domain()->set_limit(200000)->set_output('json');
        $result_json = $Ahrefs->get_backlinks_one_per_domain();
        $result = json_decode($result_json);

        $fp = fopen('file.csv', 'w');

        foreach ($result->refpages as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);
        var_dump($result->refpages);
    }
}
