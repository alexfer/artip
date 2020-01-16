<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Media\{
    CollectionFeature,
    UploadFeature,
    IndexFeature
};

class MediaController extends Controller
{

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return $this->serve(UploadFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->serve(IndexFeature::class);
    }

}
