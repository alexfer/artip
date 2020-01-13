<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Lucid\Foundation\InvalidInputException;
use Artip\Domains\Category\Jobs\AppendJob;
use Artip\Domains\Category\Jobs\ValidateJob;

class AppendFeature extends Feature
{

    public function handle(Request $request)
    {
        $input = $request->input();
        $input['name'] = $input['children'];
        try {
            $this->run(ValidateJob::class, [
                'input' => $input,
            ]);
            $this->run(AppendJob::class, [
                'input' => $input,
            ]);
            \Session::flash('success', _i('Sub category added successfully.'));
        } catch (InvalidInputException $ex) {
            \Session::flash('error', nl2br($ex->getMessage()));
        }

        return redirect(route('categories.index'));
    }

}
