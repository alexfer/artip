<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class ListJob extends Job
{

    /**
     * 
     * @return object
     */
    public function handle(): object
    {
        return Category::get()->toTree();
    }

}
