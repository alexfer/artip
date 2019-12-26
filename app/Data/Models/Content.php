<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

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
