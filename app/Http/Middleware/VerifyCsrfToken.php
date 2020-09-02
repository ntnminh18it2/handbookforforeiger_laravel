<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
    	'http://192.168.43.229/foreignerhandbook/public/*',
    	'http://192.168.43.229/foreignerhandbook/public/*',
       'http://localhost/foreignerhandbook/public/*',

    ];
}


