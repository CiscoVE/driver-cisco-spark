<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authorization Token
    |--------------------------------------------------------------------------
    |
    | Your Cisco Spark authorization token.
    |
    */
    'token' => env('CISCO_SPARK_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Webhook Secret
    |--------------------------------------------------------------------------
    |
    | Your webhook secret.
    |
    */
    'secret' => env('CISCO_SPARK_SECRET'),
];