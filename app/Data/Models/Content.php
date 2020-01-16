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
        'date',
    ];

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function type()
    {
        return $this->hasOne(ContentType::class, 'id', 'content_type_id');
    }

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasOneThrough
     */
    public function category()
    {
        return $this->hasOneThrough(Category::class, CategoryContent::class, 'content_id', 'id', 'id', 'category_id');
    }

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function media()
    {
        return $this->hasMany(MediaContent::class);
    }

}
