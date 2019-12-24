<?php

namespace Artip\Services\Admin\Features\User;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;

class FormFeature extends Feature
{

    const TEMPLATE = 'admin::user.get-form';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle()
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'languages' => config('laravel-gettext.languages'),
        ]));
    }

}
