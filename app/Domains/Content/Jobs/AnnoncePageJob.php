<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Content;

class AnnoncePageJob extends Job
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
        $entry = $content->where('content_type_id', config('content-types.annonces'))
                ->where('is_published', true)
                ->find($this->id);

        if (!$entry) {
            return [];
        }

        return $entry->toArray();
    }

}
