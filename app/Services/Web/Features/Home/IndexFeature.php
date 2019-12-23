<?php

namespace Artip\Services\Web\Features\Home;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;

class IndexFeature extends Feature
{

    const TEMPLATE = 'web::home.index';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, []));
    }

}
