<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class CreateJob extends Job
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
        $this->input['slug'] = SlugService::createSlug(Category::class, 'slug', $this->input['name'], ['unique' => false]);
        return $category->create($this->input);
    }

}
