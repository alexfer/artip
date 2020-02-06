<?php

namespace Artip\Services\Admin\Features\Submission;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Illuminate\Http\Request;
use Artip\Domains\Submission\Jobs\GetJob;

class FormFeature extends Feature
{

    const TEMPLATE = 'admin::submission.answer';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'submission' => $this->run(GetJob::class, [
                                'id' => $request->id,
                            ]),
        ]));
    }

}
