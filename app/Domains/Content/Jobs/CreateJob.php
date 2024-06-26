<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\{
    Content,
    CategoryContent
};
use Cviebrock\EloquentSluggable\Services\SlugService;

class CreateJob extends Job
{

    /**
     *
     * @var array
     */
    private $input;

    /**
     * 
     * @param array $input
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }

    /**
     * 
     * @param Content $entry
     * @return object
     * @throws \Exception
     */
    public function handle(Content $entry): object
    {
        $categoryId = $this->input['category_id'];
        unset($this->input['category_id']);

        $this->input['slug'] = SlugService::createSlug(Content::class, 'slug', $this->input['short_title'], ['unique' => true]);

        try {
            $entry = $entry->create($this->input);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

        if (isset($categoryId)) {
            CategoryContent::insert([
                'category_id' => $categoryId,
                'content_id' => $entry->id,
            ]);
        }

        return $entry;
    }

}
