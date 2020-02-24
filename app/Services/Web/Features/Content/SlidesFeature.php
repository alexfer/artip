<?php

namespace Artip\Services\Web\Features\Content;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\Widget\SlidesJob;

class SlidesFeature extends Feature
{

    const TEMPLATE = 'web::single-pages.contacts';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            //'slides' => $this->run(SlidesJob::class),
        ]));
    }

}
