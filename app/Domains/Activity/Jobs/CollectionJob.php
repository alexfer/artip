<?php

namespace Artip\Domains\Activity\Jobs;

use Lucid\Foundation\Job;
use Spatie\Activitylog\Models\Activity;

class CollectionJob extends Job
{

    /**
     * 
     * @param Activity $log
     * @return object
     */
    public function handle(Activity $log): object
    {
        return $log->with(['causer'])
                        ->orderBy('id', 'desc')
                        ->paginate(env('PAGINATE_LIMIT'));
    }

}
