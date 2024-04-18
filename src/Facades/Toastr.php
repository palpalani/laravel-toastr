<?php

declare(strict_types=1);

namespace palPalani\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'toastr';
    }
}
