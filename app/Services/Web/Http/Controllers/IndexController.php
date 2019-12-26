<?php

namespace Artip\Services\Web\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Web\Features\Home\IndexFeature;

class IndexController extends Controller
{

    /**
     * 
     * @return mixed
     */
    public function index()
    {
        return $this->serve(IndexFeature::class);
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
