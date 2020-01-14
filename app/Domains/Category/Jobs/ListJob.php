<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class ListJob extends Job
{

    /**
     * 
     * @return array
     */
    public function handle(): array
    {
        return Category::get()->toTree()->toArray();
    }

}
