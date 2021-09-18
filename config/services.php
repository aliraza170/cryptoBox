<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
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

    'bitgo' => [
        'access_token' => env('BITGO_ACCESS_TOKEN'),
        'wallet_id' => env('BITGO_WALLET_ID'),
        'walled_address' => env('BITGO_WALLET_ADDRESS'),
    ],

    'twilio' => [
        'sid' => env('TWILIO_ACCOUNT_SID', null),
        'token' => env('TWILIO_AUTH_TOKEN', null),
        'verification_sid' => env('TWILIO_VERIFICATION_SID', null),
    ],

];
