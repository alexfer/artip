<?php

namespace Artip\Services\Admin\Features\Category;

use Lucid\Foundation\Feature;
use Artip\Domains\Category\Jobs\SearchJob;
use Artip\Domains\Http\Jobs\RespondWithJsonJob;

class SearchFeature extends Feature
{

    /** @var array */
    protected $term;
    protected $haveParent;
    private $types = ['cat' => false, 'sub' => true];

    /**
     * SearchFeature constructor.
     * @param string $term
     * @param $type
     */
    public function __construct($term, $type)
    {
        $this->term = $term;
        $this->haveParent = in_array($type, array_keys($this->types)) ? $this->types[$type] : false;
    }

    public function handle()
    {
        $searches = $this->run(SearchJob::class, [
            'term' => $this->term,
            'haveParent' => $this->haveParent
        ]);
        $result = [];
        foreach ($searches->toArray() as $category) {
            empty($category['name']) || $result[] = [
                'name' => $category['name'],
                'id' => $category['id'],
            ];
        }

        return $this->run(new RespondWithJsonJob($result));
    }

}
