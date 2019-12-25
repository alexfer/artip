<?php

namespace Artip\Domains\User\Validators;

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
        'name' => [
            'required',
            'max:255',
        ],
        'email' => [
            'required',
            'email',
            'max:255',
        ],
        'password' => [
            'min:8',
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
        array_push($this->rules['email'], sprintf('unique:users,email,%d', $request->id));

        try {
            parent::validate($input, $this->rules);
        } catch (InvalidInputException $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
