<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * @var string
     */
    protected $table = 'users';

	/**
     * @var array
     */
    protected $fillable = [
    	'name',
    	'email',
    	'password',
    	'locale',
    ];

}
