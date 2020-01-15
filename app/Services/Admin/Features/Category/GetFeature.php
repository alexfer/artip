<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Artip\Domains\Category\Jobs\GetJob as GetCategoryJob;

class GetFeature extends Feature
{

    const TEMPLATE = 'Admin::dashboard.layouts.category.edit';

    public function handle(Request $request)
    {
        try {
            $category = $this->run(GetCategoryJob::class, [
                'id' => $request->id,
            ]);

            return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                                'model' => $category->toArray(),
            ]));
        } catch (ModelNotFoundException $e) {
            \Session::flash('alert-danger', _i('Category with id `%s` not found.', $request->id));
        }
    }

}
