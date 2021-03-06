<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class InsertDefaultData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertDefaultData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert the default data for position and role table';

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
        ini_set('memory_limit', '-1');
        $sep = DIRECTORY_SEPARATOR;
        DB::unprepared(file_get_contents('database' . $sep . 'custom_sql' . $sep . 'data.sql'));
       
    }
}
