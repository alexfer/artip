<?php

namespace Artip\Services\Web\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\SinglePageJob;

class SingleFeature extends Feature
{

    const TEMPLATE = 'web::single-pages.index';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $page = $this->run(SinglePageJob::class, [
            'slug' => $request->slug,
        ]);

        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'page' => $page,
        ]));
    }

}
