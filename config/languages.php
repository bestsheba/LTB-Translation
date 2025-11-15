<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Supported Languages
    |--------------------------------------------------------------------------
    |
    | Define all supported languages for the application
    |
    */
    'supported' => ['en', 'ar'],

    'languages' => [
        'en' => [
            'name' => 'English',
            'native' => 'English',
            'direction' => 'ltr',
        ],
        'ar' => [
            'name' => 'Arabic',
            'native' => 'العربية',
            'direction' => 'rtl',
        ],
    ],

    'session_key' => 'locale',
];
