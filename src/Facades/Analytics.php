<?php

namespace ACTCMS\Analytics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ACTCMS\Analytics\Analytics
 */
class Analytics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ACTCMS\Analytics\Analytics::class;
    }
}
