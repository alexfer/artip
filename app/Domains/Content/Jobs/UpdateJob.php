<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Content;

class UpdateJob extends Job
{

    /**
     *
     * @var array
     */
    private $input;

    /**
     * 
     * @param array $id
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
        try {
            $entry = $entry->where('id', $this->input['id'])
                    ->update($this->input);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

        return $entry;
    }

}
