<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Content\Jobs\UnpublishJob;

class UnpublishFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $this->run(UnpublishJob::class, [
            'id' => $request->id,
        ]);

        return response()->json([
                    'label' => _i('Publish'),
                    'url' => route('content.publish', [
                        'id' => $request->id,
                    ]),
        ]);
    }

}
