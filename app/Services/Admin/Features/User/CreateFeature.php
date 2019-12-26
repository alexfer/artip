<?php

namespace Artip\Services\Admin\Features\User;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\User\Jobs\CreateJob;
use Artip\Domains\User\Jobs\ValidateJob;

class CreateFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $input = $request->input();

        try {
            $this->run(ValidateJob::class, [
                'input' => $input,
            ]);

            $user = $this->run(CreateJob::class, [
                'input' => $request->only('name', 'email', 'locale', 'password'),
            ]);
            \Session::flash('alert-success', _i('User created successfully.'));
        } catch (\Exception $ex) {
            \Session::flash('alert-danger', $ex->getMessage());
            return response()->redirectTo(route('user.form'))->withInput($input);
        }

        return response()->redirectTo(route('user.get', [
                    'id' => $user->id,
        ]));
    }

}
