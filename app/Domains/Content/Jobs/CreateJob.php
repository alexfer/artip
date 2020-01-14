<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\{
    Content,
    CategoryContent
};

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
        try {
            $entry = $entry->create($this->input);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

        if (isset($this->input['category_id'])) {
            CategoryContent::insert([
                'category_id' => $this->input['category_id'],
                'content_id' => $entry->id,
            ]);
        }

        return $entry;
    }

}
