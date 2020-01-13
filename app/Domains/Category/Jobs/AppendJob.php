<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class AppendJob extends Job
{

    /**
     *
     * @var array
     */
    private $input = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($input = [])
    {
        $this->input = $input;
    }

    /**
     * Execute the job.
     *
     * @return mixed
     */
    public function handle(Category $category)
    {
        $category->name = $this->input['name'];
        $category->parent_id = $this->input['category'];
        return $category->save();
    }

}
