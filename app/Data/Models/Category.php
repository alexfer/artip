<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{

    use NodeTrait;

    /**
     * @var string
     */
    protected $table = 'category';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        '_lft',
        '_rgt',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var boolean
     */
    public $timestamps = true;

}
