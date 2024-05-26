<?php

namespace BrunoFalcaoPro;

use Illuminate\Support\Facades\Blade;
use Eduka\Abstracts\Classes\EdukaServiceProvider;

final class BrunoFalcaoProServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        parent::boot();
    }
}
