<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentTranslation extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'content_translations';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'translation',
        'content_id',
    ];

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function content()
    {
        return $this->hasOne(Content::class, 'id', 'content_id');
    }

}
