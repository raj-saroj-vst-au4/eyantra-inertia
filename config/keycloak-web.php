<?php

return [

    'base_url' => env('KEYCLOAK_BASE_URL', ''),

    'realm' => env('KEYCLOAK_REALM', 'master'),

    'realm_public_key' => env('KEYCLOAK_REALM_PUBLIC_KEY', null),

    'client_id' => env('KEYCLOAK_CLIENT_ID', null),

    'client_secret' => env('KEYCLOAK_CLIENT_SECRET', null),

    'cache_openid' => env('KEYCLOAK_CACHE_OPENID', false),

    'redirect_url' => '/signup',

    'routes' => [
        'login' => 'login',
        'logout' => 'logout',
        'register' => 'register',
        'callback' => 'callback',
    ],

    /**
     * GuzzleHttp Client options
     *
     * @link http://docs.guzzlephp.org/en/stable/request-options.html
     */
    'guzzle_options' => [],
];
