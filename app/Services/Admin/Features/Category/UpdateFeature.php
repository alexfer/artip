<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Lucid\Foundation\InvalidInputException;
use Artip\Domains\Category\Jobs\{
    UpdateJob,
    ValidateJob
};

class UpdateFeature extends Feature
{

    public function handle(Request $request)
    {
        try {
            $this->run(ValidateJob::class, [
                'input' => $request->input(),
            ]);

            $this->run(UpdateJob::class, [
                'input' => $request->input(),
                'id' => $request->id
            ]);
            \Session::flash('alert-success', _i('Category updated successfully.'));
        } catch (InvalidInputException $ex) {
            \Session::flash('alert-danger', nl2br($ex->getMessage()));
        }

        return redirect($request->url());
    }

}
