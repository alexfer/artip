<?php

namespace Artip\Domains\Content\Jobs\Widget;

use Artip\Data\Models\Content;
use Lucid\Foundation\Job;

class SlidesJob extends Job
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
    public function __construct(int $limit = 3)
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
        $slides = $content->with([
                    'media' => function($query) {
                        $query->with(['file']);
                    },
                ])
                ->where('is_published', true)
                ->where('content_type_id', config('content-types.slides'))
                ->orderBy('created_at', 'desc')
                ->get()
                ->take($this->limit);

        return $slides;
    }

}
