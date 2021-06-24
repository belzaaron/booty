<?php

namespace Belzaaron\Booty\Facades;

use Illuminate\Support\Facades\Facade;

class Booty extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'booty';
    }
}
