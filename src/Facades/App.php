<?php

namespace Zigzagdev\App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zigzagdev\App\App
 */
class App extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Zigzagdev\App\App::class;
    }
}
