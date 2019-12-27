<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Media\{
    CollectionFeature,
    UploadFeature
};

class MediaController extends Controller
{

    public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }

    public function upload()
    {
        return $this->serve(UploadFeature::class);
    }

}
