<?php

return [

    // Application Initialization Settings
    'app_name' => env('APP_NAME', 'Laravel Investment System'),

    // Version of the application
    'version' => '1.0.0',

    // Debug mode (true for development, false for production)
    'debug_mode' => env('APP_DEBUG', true),

    // Database connection settings
    'database' => [
        'connection' => env('DB_CONNECTION', 'mysql'),
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'forge'),
        'username' => env('DB_USERNAME', 'forge'),
        'password' => env('DB_PASSWORD', ''),
    ],

    // API keys or other sensitive data
    'api_keys' => [
        'service_1' => env('SERVICE_1_API_KEY', ''),
        'service_2' => env('SERVICE_2_API_KEY', ''),
    ],

    // Other custom configurations
    'custom_config' => [
        'enable_feature_x' => true,
        'enable_feature_y' => false,
    ],

];
