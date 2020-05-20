<?php

namespace App\Console\Commands;

use App\Serp;
use Illuminate\Console\Command;
use App\Keyword;

class PrepareKeywords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'keywords:prepare';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepare file with keywords listed each on new line';

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
        $keywords = Keyword::query()->select('keyword')
            ->orderBy('id')
            ->doesntHave('serps')
            ->limit(1000)
            ->get();

        $file = 'prepared_keywords.txt';
        file_put_contents($file, "");
        foreach($keywords as $keyword) {
            file_put_contents($file, $keyword->keyword."\n", FILE_APPEND);
//            var_dump($keyword->keyword);
//            exit;
        }
    }
}
