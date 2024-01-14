<?php

namespace LaravelAmplitude\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelAmplitude\Drivers\AmplitudeDriver;
use LaravelAmplitude\Drivers\LogDriver;
use LaravelAmplitude\Drivers\NullDriver;

/**
 * @mixin AmplitudeDriver
 * @mixin LogDriver
 * @mixin NullDriver
 */
class Amplitude extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelAmplitude\Amplitude::class;
    }
}
