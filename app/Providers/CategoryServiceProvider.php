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
        return view()->share('categories', Category::withDepth()->orderBy('order')->having('depth', '=', 0)->get()->toArray());
    }

}
