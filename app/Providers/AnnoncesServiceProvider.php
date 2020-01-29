<?php

namespace Framework\Providers;

use Illuminate\Support\ServiceProvider;
use Artip\Data\Models\Content;

class AnnoncesServiceProvider extends ServiceProvider
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
        return view()->share('annonces', Content::where('content_type_id', config('content-types.annonces'))->orderBy('id', 'desc')->get()->take(5)->toArray());
    }

}
