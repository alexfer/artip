<?php

namespace Artip\Services\Web\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Web\Features\Action\SubmissionFeature;

class SubmissionController extends Controller
{

    /**
     * 
     * @return mixed
     */
    public function send()
    {
        return $this->serve(SubmissionFeature::class);
    }

}
