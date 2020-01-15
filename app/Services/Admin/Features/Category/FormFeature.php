<?php

namespace Artip\Services\Admin\Features\Category;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Category\Jobs\ListJob;

class FormFeature extends Feature
{

    const TEMPLATE = 'admin::category.get-form';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'categories' => $this->run(ListJob::class),
        ]));
    }

}
