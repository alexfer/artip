<?php

namespace Artip\Domains\Category\Jobs;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Lucid\Foundation\Job;
use Artip\Data\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UpdateJob extends Job
{

    /**
     *
     * @var int
     */
    private $id;

    /**
     *
     * @var array
     */
    private $input = [];

    /**
     * 
     * @param array $input
     * @param int $id
     */
    public function __construct(array $input, int $id)
    {
        $this->id = $id;
        $this->input = $input;
    }

    /**
     * 
     * @param Category $category
     * @return bool
     */
    public function handle(Category $category)
    {
        unset($this->input['_method'], $this->input['_token']);
        $this->input['slug'] = SlugService::createSlug(Category::class, 'slug', $this->input['name'], ['unique' => false]);
        return $category->where('id', '=', $this->id)->update($this->input);
    }

}
