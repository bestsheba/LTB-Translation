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
            'name' => 'إنجليزي',
            'native' => 'إنجليزي',
            'direction' => 'ltr',
        ],
        'ar' => [
            'name' => 'العربية',
            'native' => 'العربية',
            'direction' => 'rtl',
        ],
    ],

    'session_key' => 'locale',
];
