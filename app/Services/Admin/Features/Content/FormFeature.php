<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\ContentType\Jobs\CollectionJob;
use Artip\Domains\Category\Jobs\ListJob;

class FormFeature extends Feature
{

    const TEMPLATE = 'admin::content.get-form';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'types' => $this->run(CollectionJob::class),
                            'categories' => $this->run(ListJob::class),
        ]));
    }

}
