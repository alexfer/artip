<?php

namespace Artip\Domains\Category\Jobs;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class GetJob extends Job
{

    /**
     * @var array
     */
    private $id;

    /**
     * @var bool
     */
    private $createIfNotExist;

    /**
     * @param int $id
     * @param bool $createIfNotExist
     */
    public function __construct($id, $createIfNotExist = true)
    {
        $this->id = $id;
        $this->createIfNotExist = $createIfNotExist;
    }

    public function handle()
    {
        return Category::find($this->id);
    }

}
