<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    |
    | The driver you want to use to send your data. You can choose from the
    | following list:
    |
    | - amplitude
    | - log
    | - null
    |
    */
    'driver' => 'amplitude',

    'api_key' => env('AMPLITUDE_API_KEY'),
    'api_url' => env('AMPLITUDE_API_URL', 'https://api.eu.amplitude.com/2/httpapi'),
];
