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
     * Execute the job.
     *
     * @return mixed
     */
    public function handle()
    {
        return Category::rebuildTree($this->tree);
    }

}
