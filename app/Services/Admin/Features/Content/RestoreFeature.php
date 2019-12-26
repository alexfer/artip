<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Content\Jobs\RestoreJob;

class RestoreFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $this->run(RestoreJob::class, [
            'id' => $request->id,
        ]);
        
        \Session::flash('alert-success', _i('Entry restored successfully.'));
    }

}
