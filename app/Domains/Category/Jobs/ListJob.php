<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class ListJob extends Job
{

    /**
     * 
     * @param Category $category
     * @return array
     */
    public function handle(Category $category): array
    {
        return $category->with('ancestors')
                        ->orderBy('order')
                        ->get()
                        ->toTree()
                        ->toArray();
    }

}
