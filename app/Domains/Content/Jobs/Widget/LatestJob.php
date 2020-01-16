<?php

namespace Artip\Domains\Content\Jobs\Widget;

use Artip\Data\Models\Content;
use Lucid\Foundation\Job;

class LatestJob extends Job
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
    public function __construct(int $limit = 2)
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
        return $content->with([
                            'type',
                            'media' => function($query) {
                                $query->with(['file']);
                            },
                        ])
                        ->where('content.is_published', true)
                        ->where('content_type_id', config('content-types.news'))
                        ->orderBy('content.created_at', 'desc')
                        ->get()
                        ->take($this->limit);
    }

}
