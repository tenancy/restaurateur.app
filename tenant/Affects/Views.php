<?php

namespace Tenant\Affects;

use Tenancy\Affects\Views\Events\ConfigureViews;

class Views
{
    public function handle(ConfigureViews $event)
    {
        $event->addPath(__DIR__.'/../views', true);
    }
}