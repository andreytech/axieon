<?php

namespace App\Console\Commands;

use App\Keyword;
use Illuminate\Console\Command;

class ImportKeywords2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:keywords';

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
        $csvFile = 'storage/Engineering Board (Tickets) - Keywords.csv';
        $file_handle = fopen($csvFile, 'r');
        if(!$file_handle) {
            return;
        }

        // Read headings
        fgetcsv($file_handle);

//        $line_of_text = fgetcsv($file_handle);
//        var_dump($line_of_text);
//        exit;

        while (($line_of_text = fgetcsv($file_handle)) !== FALSE) {

            Keyword::query()->where([
                'keyword' => trim($line_of_text[0]),
            ])->update(['is_new' => 1]);

//            if(!$pageToModel) {
//                var_dump($line_of_text[0]);
//            }

//            DB::table('keywords')->insert([
//                'keyword' => trim($line_of_text[8]),
//                'classifier3' => $line_of_text[2],
//                'classifier4' => $line_of_text[3],
//                'state' => $line_of_text[4],
//                'city' => $line_of_text[5],
//                'is_commercial' => ($line_of_text[9] == 'Commercial'? 1 : 0)
//            ]);
        }
        fclose($file_handle);

    }
}
