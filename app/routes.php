<?php

return [
    // Basic example routes. When controller is used without method (as string),
    // it needs to have a magic __invoke method defined
    ['GET', '/', 'Standard\Controllers\HomeController'],
    ['GET', '/extra', ['Standard\Controllers\ExtraController', 'indexAction']],

    // Authentication routes (sign up / log in)
    ['GET', '/auth', ['Standard\Controllers\AuthController', 'index']],
    [
        'POST',
        '/auth/signup',
        ['Standard\Controllers\AuthController', 'processSignup']
    ],
    [
        'POST',
        '/auth/login',
        ['Standard\Controllers\AuthController', 'processLogin']
    ],
    [
        ['GET', 'POST'],
        '/auth/forgotpass',
        ['Standard\Controllers\AuthController', 'forgotPassword']
    ],
];