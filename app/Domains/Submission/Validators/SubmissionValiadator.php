<?php

namespace Artip\Domains\Submission\Validators;

use Lucid\Foundation\InvalidInputException;
use Lucid\Foundation\Validator as LucidValidator;

class SubmissionValiadator extends LucidValidator
{

    /**
     * @var array
     */
    protected $rules = [
        'name' => [
            'required',
            'max:255',
        ],
        'email' => [
            'required',
            'email',
        ],
        'message' => [
            'required',
            'max:64255',
        ],
    ];

    /**
     * @param $input
     * @throws InvalidInputException
     */
    public function validateInput($input)
    {
        parent::validate($input, $this->rules);
    }

}
