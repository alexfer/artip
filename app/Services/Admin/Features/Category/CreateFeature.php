<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Lucid\Foundation\InvalidInputException;
use Artip\Domains\Category\Jobs\{
    CreateJob,
    ValidateJob
};

class CreateFeature extends Feature
{

    public function handle(Request $request)
    {
        $input = $request->input();

        try {
            $this->run(ValidateJob::class, ['input' => $input]);
            $this->run(CreateJob::class, ['input' => $input]);
            \Session::flash('alert-success', _i('New Category added successfully.'));
            return redirect(route('category.collection'));
        } catch (InvalidInputException $ex) {
            \Session::flash('alert-danger', nl2br($ex->getMessage()));
            return redirect(route('category.form'));
        }
    }

}
