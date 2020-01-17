<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\{
    Content,
    CategoryContent
};
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UpdateJob extends Job
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
     * @return bool
     * @throws \Exception
     */
    public function handle(Content $entry): bool
    {
        $this->input['slug'] = SlugService::createSlug(Content::class, 'slug', $this->input['short_title'], ['unique' => true]);
        
        if (isset($this->input['category_id'])) {
            CategoryContent::updateOrCreate(['content_id' => $this->input['id']], [
                'category_id' => $this->input['category_id'],
            ]);            
        }
        
        unset($this->input['category_id']);

        try {
            $entry = $entry->where('id', $this->input['id'])
                    ->update($this->input);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

        return $entry;
    }

}
