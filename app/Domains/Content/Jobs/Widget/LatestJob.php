<?php

namespace Artip\Domains\Content\Jobs\Widget;

use Artip\Data\Models\Content;
use Lucid\Foundation\Job;

class LatestJob extends Job
{

    /**
     *
     * @var string
     */
    private $service;

    /**
     *
     * @var int
     */
    private $limit;

    /**
     * 
     * @param string $service
     * @param int $limit
     */
    public function __construct(string $service, int $limit = 2)
    {
        $this->service = $service;
        $this->limit = $limit;
    }

    /**
     * 
     * @param Content $content
     * @return object
     */
    public function handle(Content $content): object
    {
        return $content->select([
                            'content.created_at',
                            'content.short_title',
                            'content.long_title',
                            'media.path',
                            'content_types.display_name',
                        ])
                        ->join('media_content', function($join) {
                            $join->on('content.id', '=', 'media_content.content_id');
                        })
                        ->join('media', function($join) {
                            $join->on('media.id', '=', 'media_content.media_id');
                        })
                        ->join('content_types', function($join) {
                            $join->on('content_types.id', '=', 'content.content_type_id')
                            ->where('content_types.service_name', $this->service);
                        })
                        ->where('content.is_published', true)
                        ->orderBy('content.created_at', 'desc')
                        ->get()
                        ->take($this->limit);
    }

}
