<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Content;

class NewsPageJob
{

    /**
     *
     * @var int
     */
    private $id;

    /**
     * 
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @param Content $content
     * @return array
     */
    public function handle(Content $content): array
    {
        $entry = $content->with(['media' => function($query) {
                        $query->with(['file']);
                    }])
                ->where('content_type_id', config('content-types.news'))
                ->where('is_published', true)
                ->find($this->id)
                ->toArray();

        return $entry;
    }

}
