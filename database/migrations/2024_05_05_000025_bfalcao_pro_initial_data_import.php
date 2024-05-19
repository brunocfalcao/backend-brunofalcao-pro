<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Artisan;

class BfalcaoProInitialDataImport extends Migration
{
    public function up()
    {
        Artisan::call('db:seed', [
            '--class' => 'BrunoFalcaoPro\Database\Seeders\BrunoFalcaoProSeeder',
            '--force' => true,
        ]);
    }

    public function down()
    {
        //
    }
}
