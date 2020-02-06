<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Submission;

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
     * @param Submission $submision
     * @return object
     */
    public function handle(Submission $submision): object
    {
        $this->input['visitor'] = request()->ip();
        return $submision->create($this->input);
    }

}
