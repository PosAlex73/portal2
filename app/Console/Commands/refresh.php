<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class refresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh database for development';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo "Migrating \n";
        exec('php artisan migrate:fresh');
        echo "Migrates finish \n";
        exec('php artisan db:seed --class=CommonSeeder');
        echo "Test database refresh \n";
        echo "All done! \n";

        return 0;
    }
}
