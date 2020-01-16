<?php

namespace Artip\Domains\Media\Jobs;

use Lucid\Foundation\Job;

class CropJob extends Job
{

    /**
     *
     * @var array 
     */
    private $images = [];

    /**
     *
     * @var array
     */
    private $allowed = [
        'image/png',
        'image/jpg',
        'image/jpeg',
        'image/gif',
    ];

    /**
     *
     * @var array
     */
    private $thumbnails = [
        50 => 50,
        240 => 240,
        800 => 600,
    ];

    /**
     * 
     * @param array $images
     */
    public function __construct(array $images)
    {
        $this->images = $images;
    }

    /**
     * 
     * @param Image $image
     * @return void
     */
    public function handle(\Storage $storage): void
    {
        $storage = $storage::disk('media');

        foreach ($this->images as $image) {
            if (in_array($storage->mimeType($image), $this->allowed)) {
                
                $path = $storage->path($image);
                $parts = pathinfo($path);

                foreach ($this->thumbnails as $width => $height) {
                    $thumbnail = sprintf("%d-thumb-%s", $width, $parts['basename']);
                    $storage->copy($image, $thumbnail);
                    $thumbnail = sprintf("%s/%s", $parts['dirname'], $thumbnail);
                    $img = \Image::make($thumbnail);
                    $img->fit($width, $height, function ($constraint) {
                        $constraint->upsize();
                    });
                    $img->save($thumbnail);
                }
            }
            sleep(1);
        }
    }

}
