<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;

class MediaContent extends Model
{

    /**
     * @var string
     */
    protected $table = 'media_content';

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
        'media_id',
        'content_id',
    ];

}
