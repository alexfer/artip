<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Content;

class GetJob extends Job
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
     * @param Content $entry
     * @return array
     */
    public function handle(Content $entry): array
    {
        return $entry->with(['category', 'media' => function($query) {
                                $query->with(['file']);
                            }])
                        ->withTrashed()
                        ->find($this->id)
                        ->toArray();
    }

}
