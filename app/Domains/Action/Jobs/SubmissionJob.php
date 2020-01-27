<?php

namespace Artip\Domains\Action\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Submission;

class SubmissionJob extends Job
{
    /**
     *
     * @var array
     */
    private $input = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($input = [])
    {
        $this->input = $input;
    }


    /**
     * 
     * @param Submission $send
     */
    public function handle(Submission $send)
    {
        
    }
}
