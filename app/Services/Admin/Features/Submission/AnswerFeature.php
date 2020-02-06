<?php

namespace Artip\Services\Admin\Features\Submission;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Submission\Jobs\AnswerJob;

class AnswerFeature extends Feature
{
    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $this->run(AnswerJob::class, [
            'input' => $request->input(),
        ]);
        
        return redirect(route('submission.form', [
            'id' => $request->input('id'),
        ]));
    }
}
