<?php

namespace Artip\Services\Web\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\SinglePageJob;
use Artip\Domains\Content\Jobs\Widget\LatestJob;

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
        file_put_contents("/var/www/tmp/response.log", var_export($page, true));
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'page' => $page['content'],
                            'children' => $page['children'],
                            'news' => $this->run(LatestJob::class, [                                
                                'limit' => 5,
                            ]),
        ]));
    }

}
