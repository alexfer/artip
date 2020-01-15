<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\{
    Category,
    CategoryContent
};

class DeleteJob extends Job
{

    /**
     *
     * @var int
     */
    private $id;

    /**
     * 
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @param Category $category
     * @return bool
     */
    public function handle(Category $category)
    {
        CategoryContent::where('category_id', $this->id)->delete();
        return $category->findOrFail($this->id)->delete();
    }

}
