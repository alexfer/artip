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
        if (!\Entrust::hasRole("root")) {
            \Session::flash('error', _i('You do not have permission to this action.'));
        } else {
            try {
                $this->run(ValidateJob::class, ['input' => $input]);
                $this->run(CreateJob::class, ['input' => $input]);
                \Session::flash('success', _i('New Category added successfully.'));
            } catch (InvalidInputException $ex) {
                \Session::flash('error', nl2br($ex->getMessage()));
            }
        }

        return redirect(route('categories.index'));
    }

}
