<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class SinglePageJob extends Job
{

    /**
     *
     * @var string
     */
    private $slug;

    /**
     * 
     * @param string $slug
     */
    public function __construct(string $slug)
    {
        $this->slug = $slug;
    }

    public function handle(Category $content)
    {
        return $content->with(['content'])
                        ->where('slug', $this->slug)
                        ->first()
                        ->toArray();
    }

}
