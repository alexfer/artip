<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Lucid\Foundation\InvalidInputException;
use Artip\Domains\Category\Jobs\UpdateJob as UpdateCategoryJob;
use Artip\Domains\Category\Jobs\ValidateJob as ValidateCategoryJob;

class UpdateFeature extends Feature
{

    public function handle(Request $request)
    {
        try {
            $this->run(ValidateCategoryJob::class, [
                'input' => $request->input(),
            ]);
            $this->run(UpdateCategoryJob::class, [
                'input' => $request->input(),
                'id' => $request->id
            ]);
            \Session::flash('success', _i('Category updated successfully.'));
        } catch (InvalidInputException $ex) {
            \Session::flash('error', nl2br($ex->getMessage()));
        }

        return response()->json([
                    'redirect' => $request->url(),
        ]);
    }

}
