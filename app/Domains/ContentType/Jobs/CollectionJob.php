<?php

namespace Artip\Domains\ContentType\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\ContentType;

class CollectionJob extends Job
{

    /**
     * 
     * @param ContentType $types
     * @return array
     */
    public function handle(ContentType $types): array
    {
        return $types->get()->toArray();
    }

}
