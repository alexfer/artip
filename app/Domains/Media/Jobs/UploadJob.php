<?php

namespace Artip\Domains\Media\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Media;

class UploadJob extends Job
{

    /**
     *
     * @var arrat
     */
    private $files;

    /**
     * 
     * @param array $files
     */
    public function __construct(array $files)
    {
        $this->files = $files;
    }

    /**
     * 
     * @param Media $media
     * @return void
     */
    public function handle(Media $media): void
    {
        foreach ($this->files as $file) {
            $_file = \Storage::disk('public')->put('media/', $file);
            $media->create([
                'mime' => $file->getClientMimeType(),
                'size' => $file->getSize(),
                'path' => $_file,
                'name' => $file->getClientOriginalName(),
                'extension' => $file->getClientOriginalExtension(),
            ]);
        }
    }

}
