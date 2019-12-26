<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Content;

class UnpublishJob extends Job
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
     * @return bool
     */
    public function handle(Content $entry): bool
    {
        return $entry->where('id', $this->id)->update([
                    'is_published' => 0,
        ]);
    }

}
