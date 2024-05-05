<?php

namespace Asosick\TestTime\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Asosick\TestTime\TestTime
 */
class TestTime extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Asosick\TestTime\TestTime::class;
    }
}
