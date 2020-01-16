<?php

namespace Artip\Services\Admin\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\GetJob;
use Artip\Domains\ContentType\Jobs\CollectionJob;
use Artip\Domains\Category\Jobs\ListJob;

class GetFeature extends Feature
{

    const TEMPLATE = 'admin::content.edit';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        file_put_contents("/var/www/tmp/response.log", var_export($this->run(GetJob::class, [
                                'id' => $request->id,
                            ]), true));
        
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'types' => $this->run(CollectionJob::class),
                            'categories' => $this->run(ListJob::class),
                            'entry' => $this->run(GetJob::class, [
                                'id' => $request->id,
                            ]),
        ]));
    }

}
