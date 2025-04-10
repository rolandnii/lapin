<?php

namespace RolandNii\Lapin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RolandNii\Lapin\Lapin
 */
class Lapin extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RolandNii\Lapin\Lapin::class;
    }
}
