<?php

namespace Artip\Domains\Action\Jobs;

use Lucid\Foundation\Job;

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
     * Execute the job.
     *
     * @return mixed
     */
    public function handle(Category $category)
    {
        
    }
}
