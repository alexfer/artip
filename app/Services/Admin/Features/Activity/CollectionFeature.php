<?php

namespace Artip\Services\Admin\Features\Activity;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Activity\Jobs\CollectionJob;

class CollectionFeature extends Feature
{

    const TEMPLATE = 'admin::activity.index';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'collection' => $this->run(CollectionJob::class),
        ]));
    }

}
