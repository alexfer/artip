<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Dashboard\IndexFeature;

class DashboardController extends Controller
{

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->serve(IndexFeature::class);
    }

}
