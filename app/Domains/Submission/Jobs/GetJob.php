<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Submission;

class GetJob extends Job
{

    /**
     *
     * @var int
     */
    private $id;

    /**
     * 
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @param Submission $submission
     * @return array
     */
    public function handle(Submission $submission): array
    {
        return $submission->with(['answer'])
                        ->find($this->id)
                        ->toArray();
    }

}
