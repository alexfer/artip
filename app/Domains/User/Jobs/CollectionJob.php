<?php

namespace Artip\Domains\User\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\User;

class CollectionJob extends Job
{

    /**
     * 
     * @param User $users
     * @return object
     */
    public function handle(User $users): object
    {
        return $users->orderBy('id', 'desc')->paginate(env('PAGINATE_LIMIT'));
    }

}
