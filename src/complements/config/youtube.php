<?php

return [
    /**
     * Client ID.
     */

    'id_client' => env('ID_CLIENT_GOOGLE', null),

    /**
     * Client Secret.
     */

    'secret_client' => env('SECRET_CLIENT_GOOGLE', null),

    /**
     * Scopes.
     */

    'scopes' => [
        'https://www.googleapis.com/auth/youtube',
        'https://www.googleapis.com/auth/youtube.upload',
        'https://www.googleapis.com/auth/youtube.readonly',
        'https://www.googleapis.com/auth/youtubepartner',
        'https://www.googleapis.com/auth/youtubepartner-channel-audit',
        'https://www.googleapis.com/auth/youtube.force-ssl'
    ],

    'redirect_auth' => true,

    /**
     * Routes
     */

    'routes' => [
        'enabled' => false,
        'prefix' => 'youtube',
        'redirect_uri' => 'callback',
        'authentication_uri' => 'auth',
        'redirect_back_uri' => '/',
    ]
];