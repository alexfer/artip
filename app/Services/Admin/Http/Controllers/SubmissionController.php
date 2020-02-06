<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Submission\{
    CollectionFeature,
    AnswerFeature,
    FormFeature
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

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function answer()
    {
        return $this->serve(AnswerFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return $this->serve(FormFeature::class);
    }

}
