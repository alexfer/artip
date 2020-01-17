<?php

namespace Artip\Services\Web\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Web\Features\Media\DownloadFeature;

class MediaController extends Controller
{

    /**
     * 
     * @return mixed
     */
    public function download()
    {
        return $this->serve(DownloadFeature::class);
    }

}
