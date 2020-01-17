<?php

namespace Artip\Services\Web\Features\Media;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Content\Jobs\DownloadJob;

class DownloadFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        return $this->run(DownloadJob::class, [
                    'id' => $request->id,
        ]);
    }

}
