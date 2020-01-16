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
     * @return array
     */
    public function handle(Media $media): array
    {
        $images = [];

        foreach ($this->files as $file) {
            $path = \Storage::disk('media')->put(null, $file);
            $media->create([
                'mime' => $file->getClientMimeType(),
                'size' => $file->getSize(),
                'path' => $path,
                'name' => $file->getClientOriginalName(),
                'extension' => $file->getClientOriginalExtension(),
            ]);
            $images[] = $path;
        }

        return $images;
    }

}
