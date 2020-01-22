<?php

namespace Artip\Services\Web\Features\Home;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\Widget\{
    LatestJob,
    AnnoncesJob,
    SlidesJob
};

class IndexFeature extends Feature
{

    const TEMPLATE = 'web::home.index';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'news' => $this->run(LatestJob::class),
                            'annonces' => $this->run(AnnoncesJob::class),
                            'slides' => $this->run(SlidesJob::class),
        ]));
    }

}
