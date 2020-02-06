<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Media;

class DownloadJob extends Job
{

    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function handle(Media $media)
    {
        $file = $media->find($this->id)->toArray();
        return \Storage::disk('media')->download($file['path'], $file['name'], [
                    'Content-type' => $file['mime']
        ]);
    }

}
