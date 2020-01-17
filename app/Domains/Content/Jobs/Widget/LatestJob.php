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
    private $limit, $notIn;

    /**
     * 
     * @param int $limit
     */
    public function __construct(int $limit = 2, int $notIn = 0)
    {
        $this->limit = $limit;
        $this->notIn = $notIn;
    }

    /**
     * 
     * @param Content $content
     * @return object
     */
    public function handle(Content $content): object
    {
        $latest = $content->with([
                    'type',
                    'media' => function($query) {
                        $query->with(['file']);
                    },
                ])
                ->where('is_published', true)
                ->where('id', '<>', $this->notIn)
                ->where('content_type_id', config('content-types.news'))
                ->orderBy('created_at', 'desc')
                ->get()
                ->take($this->limit);
        return $latest;
    }

}
