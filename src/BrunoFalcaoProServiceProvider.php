<?php

namespace BrunoFalcaoPro;

use Eduka\Abstracts\Classes\EdukaServiceProvider;
use Illuminate\Support\Facades\Blade;

final class BrunoFalcaoProServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components');

        parent::boot();
    }
}
