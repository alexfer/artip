<?php

namespace Artip\Services\Web\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Web\Features\Content\{
    SingleFeature,
    NewsFeature
};

class ContentController extends Controller
{

    /**
     * 
     * @return mixed
     */
    public function single()
    {
        return $this->serve(SingleFeature::class);
    }

    /**
     * 
     * @return mixed
     */
    public function news()
    {
        return $this->serve(NewsFeature::class);
    }

    /**
     * 
     * @return mixed
     */
    public function contact()
    {
        return view('web::single-pages.contacts');
    }

}
