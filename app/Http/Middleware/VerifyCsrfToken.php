<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'api/user',
        'broadcasting/auth',
        'admin/charges',
        '/checkout',
        '/checkout/charges/*',
        '/webhooks/mailgun_info/*',
        '/webhooks/mailgun_subscribe/*'
    ];
}
