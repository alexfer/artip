<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class UpdateTreeJob extends Job
{

    /**
     *
     * @var array
     */
    private $tree = [];

    /**
     * Create a new job instance.
     *
     * @return void
     * @param array $tree
     */
    public function __construct($tree = [])
    {
        $this->tree = $tree;
    }

    /**
     * 
     * @param Category $category
     * @return void
     */
    public function handle(Category $category): void
    {
        foreach ($this->tree as $order => $id) {
            $category->where('id', $id)
                    ->update([
                        'order' => $order,
            ]);
        }
    }

}
