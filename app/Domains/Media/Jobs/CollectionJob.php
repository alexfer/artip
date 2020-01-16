<?php

namespace Artip\Domains\Media\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Media;

class CollectionJob extends Job
{

    /**
     *
     * @var int|null
     */
    private $limit;

    /**
     * 
     * @param int|null $limit
     */
    public function __construct(?int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * 
     * @param Media $media
     * @return object
     */
    public function handle(Media $media): object
    {
        return $media->orderBy('id', 'desc')->paginate(isset($this->limit) ? $this->limit : env('PAGINATE_LIMIT'));
    }

}
