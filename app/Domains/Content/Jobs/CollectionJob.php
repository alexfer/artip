<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Content;

class CollectionJob extends Job
{

    /**
     * 
     * @param Content $content
     * @return object
     */
    public function handle(Content $content): object
    {
        return $content->with(['category:id,display_name'])
                        ->orderBy('id', 'desc')
                        ->paginate(env('PAGINATE_LIMIT'));
    }

}
