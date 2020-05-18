<?php

return [
    /**
     * You can find your Sendwithus api key in the dashboard of your account
     */
    'api_key_production' => env('SENDWITHUS_API_KEY_PRODUCTION', ''),
    'api_key_testing' => env('SENDWITHUS_API_KEY_TESTING', ''),

    /**
     * default_api_key must be one of production or testing
     *
     * anything else will cause errors!
     */
    'default_api_key' => env('SENDWITHUS_API_DEFAULT_KEY', 'production'),

    /**
     * Currently only option is debug mode.
     *
     * Default is off.
     */
    'options' => [
        'debug' => env('SENDWITHUS_API_DEBUG', false)
    ]
];
