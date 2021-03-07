<?php

namespace palPalani\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'toastr';
    }
}
