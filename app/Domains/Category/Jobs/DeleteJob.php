<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

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
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Category $category)
    {
        return $category->findOrFail($this->id)->delete();
    }

}
