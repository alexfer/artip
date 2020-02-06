<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Dashboard\{
    IndexFeature,
    StorageLinkFeature
};

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

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function storageLink()
    {
        return $this->serve(StorageLinkFeature::class);
    }

}
