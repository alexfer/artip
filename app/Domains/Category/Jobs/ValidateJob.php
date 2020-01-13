<?php

namespace Artip\Domains\Category\Jobs;

use Lucid\Foundation\Job;
use Artip\Domains\Category\Validators\Validator as CategoryValidator;

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
    public function handle(CategoryValidator $validator)
    {
        return $validator->validateInput($this->input);
    }

}
