<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Artip\Domains\Submission\Validators\SubmissionValiadator;

class ValidateJob extends Job
{

    /**
     *
     * @var type 
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
     * Execute the job.
     *
     * @return mixed
     */
    public function handle(SubmissionValiadator $validator)
    {
        return $validator->validateInput($this->input);
    }

}
