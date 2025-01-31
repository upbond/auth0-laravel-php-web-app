<?php

return array(

    /*
    |--------------------------------------------------------------------------
    |   Your auth0 domain
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'domain'        => env( 'UPBOND_AUTH_DOMAIN' ),

    /*
    |--------------------------------------------------------------------------
    |   Your APP id
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'client_id'     => env( 'UPBOND_AUTH_CLIENT_ID' ),

    /*
    |--------------------------------------------------------------------------
    |   Your APP secret
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'client_secret' => env( 'UPBOND_AUTH_CLIENT_SECRET' ),

    /*
     |--------------------------------------------------------------------------
     |   The redirect URI
     |--------------------------------------------------------------------------
     |   Should be the same that the one configure in the route to handle the
     |   'Auth0\Login\Auth0Controller@callback'
     |
     */
    'redirect_uri'  => env( 'APP_URL' ) . '/auth/callback',

    /*
    |--------------------------------------------------------------------------
    |   Persistence Configuration
    |--------------------------------------------------------------------------
    |   persist_user            (Boolean) Optional. Indicates if you want to persist the user info, default true
    |   persist_access_token    (Boolean) Optional. Indicates if you want to persist the access token, default false
    |   persist_id_token        (Boolean) Optional. Indicates if you want to persist the id token, default false
    |
    */
    'persist_user' => true,
    'persist_access_token' => false,
    'persist_id_token' => false,

    /*
    |--------------------------------------------------------------------------
    |   The authorized token issuers
    |--------------------------------------------------------------------------
    |   This is used to verify the decoded tokens when using RS256
    |
    */
    'authorized_issuers'  => [ env( 'UPBOND_AUTH_DOMAIN' ) ],

    /*
    |--------------------------------------------------------------------------
    |   The authorized token audiences
    |--------------------------------------------------------------------------
    |
    */
    // 'api_identifier'  => '',

    /*
    |--------------------------------------------------------------------------
    |   The secret format
    |--------------------------------------------------------------------------
    |   Used to know if it should decode the secret when using HS256
    |
    */
    'secret_base64_encoded'  => false,

    /*
    |--------------------------------------------------------------------------
    |   Supported algs by your API
    |--------------------------------------------------------------------------
    |   Algs supported by your API
    |
    */
    'supported_algs'        => [ 'HS256', 'RS256' ],

    /*
    |--------------------------------------------------------------------------
    |   Guzzle Options
    |--------------------------------------------------------------------------
    |   guzzle_options    (array) optional. Used to specify additional connection options e.g. proxy settings
    |
    */
    // 'guzzle_options' => []
    // 'enable_pkce' => true
);