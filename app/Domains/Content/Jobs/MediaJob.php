<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\MediaContent;

class MediaJob
{

    /**
     *
     * @var array
     */
    private $ids = [];

    /**
     *
     * @var int
     */
    private $id;

    /**
     * 
     * @param int $id
     * @param array $ids
     */
    public function __construct(int $id, ?array $ids)
    {
        $this->id = $id;
        $this->ids = $ids;
    }

    /**
     * 
     * @param MediaContent $media
     * @return void
     */
    public function handle(MediaContent $media): void
    {
        $media->where('content_id', $this->id)->delete();

        if (isset($this->ids) && count($this->ids)) {
            foreach ($this->ids as $id) {
                $media->insert([
                    'content_id' => $this->id,
                    'media_id' => $id,
                ]);
            }
        }
    }

}
