<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Content\Jobs\UpdateJob;
use Artip\Domains\Content\Jobs\ValidateJob;

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
                'input' => $request->only('short_title', 'long_title', 'content', 'content_type_id', 'id', 'category_id'),
            ]);
            \Session::flash('alert-success', _i('Entry updated successfully.'));
        } catch (\Exception $ex) {
            \Session::flash('alert-danger', $ex->getMessage());
        }

        return response()->redirectTo(route('content.get', [
                    'id' => $request->id,
        ]));
    }

}
