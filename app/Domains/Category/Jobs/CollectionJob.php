<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class CollectionJob extends Job
{

    /**
     *
     * @var array
     */
    private $ids = [];

    /**
     * CollectionJob constructor.
     * @param $ids
     */
    public function __construct($ids = [])
    {
        $this->ids = $ids;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!empty($this->ids)) {
            return Category::whereIn('id', $this->ids)->get();
        }
        return Category::all();
    }

}
