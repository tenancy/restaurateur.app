<?php

namespace Tenant\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as Provider;
use Tenancy\Affects\Routes\Events\ConfigureRoutes;
use Tenancy\Affects\Views\Events\ConfigureViews;
use Tenant\Affects;

class EventServiceProvider extends Provider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ConfigureViews::class => [
            Affects\Views::class
        ]
    ];
}