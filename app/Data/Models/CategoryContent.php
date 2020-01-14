<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryContent extends Model
{

    /**
     * @var string
     */
    protected $table = 'category_content';

    /**
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'content_id',
    ];

}
