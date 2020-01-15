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
    public function handle(\Image $image): void
    {
        foreach ($this->images as $path) {
            $img = $image::make($path);
            $img->resize(320, 240);
            $img->save($path);
        }
    }

}
