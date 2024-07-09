<?php 
return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*'],  // Defines the paths that should be considered for CORS
    'allowed_methods' => ['*'],  // Methods that are allowed when accessing the paths
    'allowed_origins' => ['http://localhost:8080'],  // Specifies which origins are allowed
    'allowed_origins_patterns' => [],  // Allows for patterns with regular expressions
    'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization'],  // Defines which HTTP headers are allowed
    'exposed_headers' => [],  // Headers that should be exposed to the browser
    'max_age' => 0,  // Defines the maximum time (in seconds) that the results of a preflight request can be cached
    'supports_credentials' => false,  // Specifies whether credentials are supported

];