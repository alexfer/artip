<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Content\Jobs\PublishJob;

class PublishFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $this->run(PublishJob::class, [
            'id' => $request->id,
        ]);

        return response()->json([
                    'label' => _i('Unpublish'),
                    'url' => route('content.unpublish', [
                        'id' => $request->id,
                    ]),
        ]);
    }

}
