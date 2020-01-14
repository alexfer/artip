<?php

namespace Artip\Domains\Category\Validators;

use Lucid\Foundation\InvalidInputException;
use Lucid\Foundation\Validator as LucidValidator;

class Validator extends LucidValidator
{

    /**
     * @var array
     */
    protected $rules = [
        'name' => [
            'required',
            'max:255',
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
