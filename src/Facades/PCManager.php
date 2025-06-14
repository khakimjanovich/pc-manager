<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Khakimjanovich\PCManager\PCManager
 */
final class PCManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Khakimjanovich\PCManager\PCManager::class;
    }
}
