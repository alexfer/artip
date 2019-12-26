<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'content';

    /**
     * @var array
     */
    protected $fillable = [
        'short_title',
        'long_title',
        'content',
        'content_type_id',
    ];

    public function category()
    {
        return $this->hasOne(ContentType::class, 'id', 'content_type_id');
    }

}
