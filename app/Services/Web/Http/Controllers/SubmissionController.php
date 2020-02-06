<?php

namespace Artip\Services\Web\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Web\Features\Submission\{
    CreateFeature,
    ReviewFeature
};

class SubmissionController extends Controller
{

    /**
     * 
     * @return mixed
     */
    public function send()
    {
        return $this->serve(CreateFeature::class);
    }
    
    /**
     * 
     * @return mixed
     */
    public function review()
    {
        return $this->serve(ReviewFeature::class);
    }

}
