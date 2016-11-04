<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => AmSimulador2\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '1298044173548779',
        'client_secret' => '3cc014481af32f116310cfd9a9e86f77',
        'redirect' => 'http://www.vuela.aeromexico.com/experienciadevuelo/home',
    ],
    'twitter' => [
    'client_id' => 'dyH1JiOJrQAYmMlbBZ9UESa8t',
    'client_secret' => '93yryCYG2YCbgq7VtWYYVQwR3OdTK9vog0lAs5IUFnWpmHMLC2',
    'redirect' => 'http://www.vuela.aeromexico.com/experienciadevuelo/home',
    ],

];
