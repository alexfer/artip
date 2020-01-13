<?php

namespace Artip\Domains\Category\Jobs;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class UpdateJob extends Job
{

    private $id;
    private $input = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($input = [])
    {
        $this->id = $input['id'];
        unset($input['id']);
        $this->input = $input;
    }

    /**
     * Execute the job.
     *
     * @return mixed
     */
    public function handle()
    {
        $category = Category::query()->where('id', '=', $this->id)->first();

        if (empty($category)) {
            throw new ModelNotFoundException();
        }

        return $category->patch($this->input);
    }

}
