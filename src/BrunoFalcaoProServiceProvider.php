<?php

namespace BrunoFalcaoPro;

use Eduka\Abstracts\Classes\EdukaServiceProvider;
use Illuminate\Support\Facades\Vite;

final class BrunoFalcaoProServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        $this->customViewNamespace(__DIR__.'/../resources/views', 'backend');

        parent::boot();
    }

    public function register()
    {
        //
    }
}
