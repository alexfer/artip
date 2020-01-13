<?php

namespace Artip\Services\Admin\Features\Category;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Category\Jobs\ListJob;

class CollectionFeature extends Feature
{

    const TEMPLATE = 'admin::category.index';

    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'categories' => $this->run(ListJob::class),
        ]));
    }

}
