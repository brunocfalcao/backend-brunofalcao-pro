<?php

namespace BrunoFalcaoPro;

use Eduka\Abstracts\Classes\EdukaServiceProvider;

final class BrunoFalcaoProServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        parent::boot();
    }
}
