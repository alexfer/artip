<?php

namespace Artip\Services\Admin\Features\Dashboard;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;

class IndexFeature extends Feature
{

    const TEMPLATE = 'admin::dashboard.index';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, []));
    }

}
