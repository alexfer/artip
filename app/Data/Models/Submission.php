<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{

    /**
     * @var string
     */
    protected $table = 'submissions';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'message',
        'visitor',
        'is_new',
    ];

}
