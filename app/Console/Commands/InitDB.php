<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InitDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init DB';

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
//        Artisan::call('import:keywords');
//        echo Artisan::output();
        Artisan::call('serp:import');
        echo Artisan::output();
        Artisan::call('potentialcustomers:import');
        echo Artisan::output();
        Artisan::call('backlinkuniverse:import');
        echo Artisan::output();
    }
}
