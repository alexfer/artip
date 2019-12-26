<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Content\CollectionFeature;

class ContentController extends Controller
{
	public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }
}