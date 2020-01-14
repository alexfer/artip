<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Content\Jobs\CreateJob;
use Artip\Domains\Content\Jobs\ValidateJob;

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

            $entry = $this->run(CreateJob::class, [
                'input' => $request->only('short_title', 'long_title', 'content', 'content_type_id', 'category_id'),
            ]);
            \Session::flash('alert-success', _i('Entry created successfully.'));
        } catch (\Exception $ex) {
            \Session::flash('alert-danger', $ex->getMessage());
            return response()->redirectTo(route('content.form'))->withInput($input);
        }

        return response()->redirectTo(route('content.get', [
                    'id' => $entry->id,
        ]));
    }

}
