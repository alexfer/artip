<?php

namespace Artip\Domains\Media\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Media;

class CollectionJob extends Job
{

    /**
     * 
     * @param Media $media
     * @return object
     */
    public function handle(Media $media): object
    {
        return $media->orderBy('id', 'desc')->paginate(env('PAGINATE_LIMIT'));
    }

}
