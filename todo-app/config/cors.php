<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | Here you may specify the paths that should be handled by CORS. The paths
    | should be relative to the base URL of your application. For example, you
    | may set this to 'api/*' to apply CORS to all API routes.
    |
    */

    'paths' => ['api/*'],

    /*
    |--------------------------------------------------------------------------
    | Allowed Methods
    |--------------------------------------------------------------------------
    |
    | The allowed HTTP methods for CORS requests. By default, all methods are
    | allowed. You may specify which methods are allowed.
    |
    */

    'allowed_methods' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins
    |--------------------------------------------------------------------------
    |
    | The allowed origins for CORS requests. By default, all origins are allowed.
    | You may specify a list of origins that are allowed to make requests to your
    | application.
    |
    */

    'allowed_origins' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins Patterns
    |--------------------------------------------------------------------------
    |
    | Patterns that may be used to match allowed origins. This allows you to use
    | regular expressions to match allowed origins.
    |
    */

    'allowed_origins_patterns' => [],

    /*
    |--------------------------------------------------------------------------
    | Allowed Headers
    |--------------------------------------------------------------------------
    |
    | The allowed headers for CORS requests. By default, all headers are allowed.
    | You may specify which headers are allowed.
    |
    */

    'allowed_headers' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | Exposed Headers
    |--------------------------------------------------------------------------
    |
    | The headers that are exposed to the browser. You can specify which headers
    | are exposed to the browser.
    |
    */

    'exposed_headers' => [],

    /*
    |--------------------------------------------------------------------------
    | Max Age
    |--------------------------------------------------------------------------
    |
    | The maximum amount of time (in seconds) that the results of a preflight
    | request can be cached by the browser. By default, this is set to 0.
    |
    */

    'max_age' => 0,

    /*
    |--------------------------------------------------------------------------
    | Supports Credentials
    |--------------------------------------------------------------------------
    |
    | Indicates whether the response to the request can be exposed when the
    | credentials flag is true. By default, this is false.
    |
    */

    'supports_credentials' => false,

];
