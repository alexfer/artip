<?php

namespace Artip\Services\Admin\Features\Media;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Media\Jobs\CollectionJob;

class CollectionFeature extends Feature
{

    const TEMPLATE = 'admin::media.index';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'collection' => $this->run(CollectionJob::class, [
                                'limit' => null,
                            ]),
        ]));
    }

}
