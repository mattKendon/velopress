<?php

namespace Velopress\Facades;

use Illuminate\Support\Facades\Facade;

class Wordpress extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wordpress';
    }

}