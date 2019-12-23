<?php

namespace Artip\Foundation;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    public function register()
    {
        // Register the service providers of your Services here.
        $this->app->register('Artip\Services\Admin\Providers\AdminServiceProvider');
        $this->app->register('Artip\Services\Web\Providers\WebServiceProvider');
    }

}
