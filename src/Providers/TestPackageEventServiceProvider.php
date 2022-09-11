<?php

namespace Ahmetbarut\TestPackage\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;

class TestPackageEventServiceProvider extends EventServiceProvider
{
    protected $listen = [
        'Illuminate\Auth\Events\Login' => [
            'Ahmetbarut\TestPackage\Listeners\LoginListener',
        ],
    ];
}
