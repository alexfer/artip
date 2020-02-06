<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Submission;

class CollectionJob extends Job
{

    /**
     * 
     * @param Media $submission
     * @return object
     */
    public function handle(Submission $submission): object
    {
        return $submission->where('user_id', 0)->orderBy('id', 'desc')->paginate(env('PAGINATE_LIMIT'));
    }

}
