<?php

namespace Artip\Services\Admin\Features\User;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\User\Jobs\CollectionJob;

class CollectionFeature extends Feature
{

    const TEMPLATE = 'admin::user.index';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'languages' => config('laravel-gettext.languages'),
                            'users' => $this->run(CollectionJob::class),
        ]));
    }

}
