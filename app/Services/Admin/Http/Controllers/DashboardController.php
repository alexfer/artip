<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Dashboard\{
    IndexFeature,
    StorageLinkFeature,
    DbMigrateFeature
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
    
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function dbMigrate()
    {
        return $this->serve(DbMigrateFeature::class);
    }

}
