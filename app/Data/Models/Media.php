<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{

    /**
     * @var string
     */
    protected $table = 'media';

    /**
     *
     * @var array
     */
    protected $fillable = [
        'mime',
        'size',
        'path',
        'name',
        'extension',
    ];

}
