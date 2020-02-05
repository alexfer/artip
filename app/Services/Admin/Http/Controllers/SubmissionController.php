<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Submission\{
    CollectionFeature
    
};

class SubmissionController extends Controller
{

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }

}
