<?php

namespace Artip\Services\Admin\Features\User;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\User\Jobs\GetJob;

class GetFeature extends Feature
{

    const TEMPLATE = 'admin::user.edit';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'languages' => config('laravel-gettext.languages'),
                            'user' => $this->run(GetJob::class, [
                                'id' => $request->id,
                            ]),
        ]));
    }

}
