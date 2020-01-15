<?php

namespace Framework\Providers;

use Illuminate\Support\ServiceProvider;
use Artip\Data\Models\Category;

class CategoryServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        file_put_contents("/var/www/tmp/response.log", var_export(Category::get()->toTree()->toArray(), true));
        return view()->share('categories', Category::get()->toTree()->toArray());
    }

}
