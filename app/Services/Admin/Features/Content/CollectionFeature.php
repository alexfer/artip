<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\CollectionJob;

class CollectionFeature extends Feature
{

    const TEMPLATE = 'admin::content.index';

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
