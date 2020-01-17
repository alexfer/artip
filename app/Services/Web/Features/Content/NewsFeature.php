<?php

namespace Artip\Services\Web\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\Widget\LatestJob;
use Artip\Domains\Content\Jobs\NewsPageJob;

class NewsFeature extends Feature
{

    const TEMPLATE = 'web::single-pages.news';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'page' => $this->run(NewsPageJob::class, [
                                'id' => $request->id,
                            ]),
                            'news' => $this->run(LatestJob::class, [
                                'notIn' => $request->id,
                                'limit' => 5,
                            ]),
        ]));
    }

}
