<?php

namespace Artip\Domains\Content\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Category;

class SinglePageJob extends Job
{

    /**
     *
     * @var string
     */
    private $slug;

    /**
     * 
     * @param string $slug
     */
    public function __construct(string $slug)
    {
        $this->slug = $slug;
    }

    public function handle(Category $category)
    {
        $content = $category->with([
                    'content' => function($query) {
                        $query->with([
                            'translation',
                            'media' => function($query) {
                                $query->with(['file']);
                            }]);
                    }])
                ->where('slug', $this->slug)
                ->first()
                ->toArray();

        $root = $category->whereAncestorOrSelf($content['id'])->first()->toArray();

        return [
            'content' => $content,
            'children' => $category
                    ->get()
                    ->toTree($root['id'])
                    ->toArray(),
        ];
    }

}
