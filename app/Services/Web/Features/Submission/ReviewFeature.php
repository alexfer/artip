<?php

namespace Artip\Services\Web\Features\Submission;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Submission\Jobs\ReviewJob;
use Artip\Domains\Content\Jobs\Widget\LatestJob;

class ReviewFeature extends Feature
{

    const TEMPLATE = 'web::single-pages.submission';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        try {
            return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                                'news' => $this->run(LatestJob::class),
                                'submission' => $this->run(ReviewJob::class, [
                                    'code' => $request->code,
                                ]),
            ]));
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
//abort(404);
        }
    }

}
