<?php

namespace LaravelAmplitude\Facades;

use Illuminate\Support\Facades\Facade;

class Amplitude extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelAmplitude\Amplitude::class;
    }
}
