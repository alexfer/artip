<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{

    use Sluggable,
        NodeTrait {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }

    /**
     * 
     * @param array $except
     * @return object
     */
    public function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new SlugService())->slug($instance, true);

        return $instance;
    }

    /**
     * 
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

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

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasOneThrough
     */
    public function content()
    {
        return $this->hasOneThrough(Content::class, CategoryContent::class, 'category_id', 'id', 'id', 'content_id')->where('is_published', true);
    }

}
