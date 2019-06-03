<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'firebase' => [
        'api_key' => 'AIzaSyA8sWt__tbcPGFNYu6gPCeHWBKCIx8cqqQ', // Only used for JS integration
        'auth_domain' => 'vendors-signin.firebaseapp.com', // Only used for JS integration
        'database_url' => 'https://vendors-signin.firebaseio.com/',
        'secret' => '1:792494370654:web:68506678179afc07',
        'storage_bucket' => 'vendors-signin.appspot.com', // Only used for JS integration
    ],
    

    // var firebaseConfig = {
    //     apiKey: "AIzaSyA8sWt__tbcPGFNYu6gPCeHWBKCIx8cqqQ",
    //     authDomain: "vendors-signin.firebaseapp.com",
    //     databaseURL: "https://vendors-signin.firebaseio.com",
    //     projectId: "vendors-signin",
    //     storageBucket: "vendors-signin.appspot.com",
    //     messagingSenderId: "792494370654",
    //     appId: "1:792494370654:web:68506678179afc07"
      

];
