<?php

namespace App\Console\Commands;

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
            ->where('is_new', 1)
//            ->doesntHave('serps')
            ->get();

        $batch_num = 0;
        $file = '';
        foreach($keywords as $i => $keyword) {
            if($i >= $batch_num*1000) {
                $batch_num++;
                $file = "prepared_keywords{$batch_num}.txt";
                file_put_contents($file, "");
            }

            file_put_contents($file, $keyword->keyword."\n", FILE_APPEND);
//            var_dump($keyword->keyword);
//            exit;
        }
    }
}
