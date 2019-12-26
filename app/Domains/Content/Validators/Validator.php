<?php

namespace Artip\Domains\Content\Validators;

use Illuminate\Http\Request;
use Lucid\Foundation\InvalidInputException;
use Lucid\Foundation\Validator as LucidValidator;

class Validator extends LucidValidator
{

    /**
     *
     * @var array 
     */
    protected $rules = [
        'short_title' => [
            'required',
            'max:255',
        ],
        'long_title' => [
            'max:510',
        ],
        'content' => [
            'required',
        ],
        'content_type_id' => [
            'required',
            'integer',
        ],
    ];

    /**
     * 
     * @param array $input
     * @param Request $request
     * @throws \Exception
     */
    public function validateInput(array $input, Request $request)
    {
        try {
            parent::validate($input, $this->rules);
        } catch (InvalidInputException $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
