<?php

use Illuminate\Database\Seeder;

class KeywordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = 'storage/Keyword Index Storage (KIS) - Keyword Basic Information.csv';
        $file_handle = fopen($csvFile, 'r');
        if(!$file_handle) {
            return;
        }

        // Read headings
        fgetcsv($file_handle);

//        $line_of_text = fgetcsv($file_handle);
//        var_dump($line_of_text);
//        exit;

        while (!feof($file_handle)) {
            $line_of_text = fgetcsv($file_handle);

            if(in_array($line_of_text[2], ['Health Insurance', 'Other Types of Insurance'])) {
                continue;
            }

            DB::table('keywords')->insert([
                'keyword' => trim($line_of_text[8]),
                'classifier3' => $line_of_text[2],
                'classifier4' => $line_of_text[3],
                'state' => $line_of_text[4],
                'city' => $line_of_text[5],
                'is_commercial' => ($line_of_text[9] == 'Commercial'? 1 : 0)
            ]);
        }
        fclose($file_handle);

    }
}
