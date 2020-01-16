<?php

namespace Artip\Domains\Content\Jobs\Widget;

use Artip\Data\Models\Content;
use Lucid\Foundation\Job;

class AnnoncesJob extends Job
{

    /**
     *
     * @var int
     */
    private $limit;

    /**
     * 
     * @param int $limit
     */
    public function __construct(int $limit = 1)
    {
        $this->limit = $limit;
    }

    /**
     * 
     * @param Content $content
     * @return object
     */
    public function handle(Content $content): object
    {
        return $content->with(['type'])
                        ->where('content.is_published', true)
                        ->where('content_type_id', config('content-types.annonces'))
                        ->orderBy('content.date', 'desc')
                        ->get()
                        ->take($this->limit);
    }

}
