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
        'category_id' => [
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
        /*
        if (isset($input['category_id'])) {
            array_push($this->rules['category_id'], sprintf('unique:category_content,category_id,%d', $input['category_id']));
        }
         * 
         */

        try {
            parent::validate($input, $this->rules);
        } catch (InvalidInputException $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
