<?php

namespace Khakimjanovich\PCManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Khakimjanovich\PCManager\PCManager
 */
class PCManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Khakimjanovich\PCManager\PCManager::class;
    }
}
