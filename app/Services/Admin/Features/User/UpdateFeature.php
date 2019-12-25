<?php

namespace Artip\Services\Admin\Features\User;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\User\Jobs\UpdateJob;
use Artip\Domains\User\Jobs\ValidateJob;

class UpdateFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        try {
            $this->run(ValidateJob::class, [
                'input' => $request->input(),
            ]);

            $this->run(UpdateJob::class, [
                'input' => $request->only('name', 'email', 'locale', 'id'),
            ]);
            \Session::flash('alert-success', _i('User updated successfully.'));
        } catch (\Exception $ex) {
            \Session::flash('alert-danger', $ex->getMessage());
        }

        return response()->redirectTo(route('user.get', [
                    'id' => $request->id,
        ]));
    }

}
