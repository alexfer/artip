<?php

namespace Artip\Domains\User\Jobs;

use Illuminate\Http\Request;
use Lucid\Foundation\Job;
use Artip\Domains\User\Validators\Validator;

class ValidateJob extends Job
{

    private $input = [];

    /**
     * 
     * @param array $input
     */
    public function __construct(array $input = [])
    {
        $this->input = $input;
    }

    /**
     * 
     * @param Validator $validator
     * @param Request $request
     * @return mixed
     */
    public function handle(Validator $validator, Request $request)
    {
        return $validator->validateInput($this->input, $request);
    }

}
