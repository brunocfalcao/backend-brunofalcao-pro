<?php

namespace BrunoFalcaoPro\Database\Seeders;

use Eduka\Cube\Models\Backend;
use Illuminate\Database\Seeder;

class BrunoFalcaoProSeeder extends Seeder
{
    public function run()
    {
        $backend = Backend::create([
            'name' => 'brunofalcao.pro',
            'canonical' => 'backend-brunofalcao-pro',
            'domain' => env('BPRO_DOMAIN'),
            'provider_namespace' => '\BrunoFalcaoPro\BrunoFalcaoProServiceProvider',
        ]);
    }
}
