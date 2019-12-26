<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Content\{
    CollectionFeature,
    GetFeature,
    FormFeature,
    CreateFeature,
    PublishFeature,
    UnpublishFeature,
    UpdateFeature
};

class ContentController extends Controller
{

    public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }

    public function get()
    {
        return $this->serve(GetFeature::class);
    }

    public function form()
    {
        return $this->serve(FormFeature::class);
    }

    public function create()
    {
        return $this->serve(CreateFeature::class);
    }

    public function publish()
    {
        return $this->serve(PublishFeature::class);
    }

    public function unpublish()
    {
        return $this->serve(UnpublishFeature::class);
    }

    public function update()
    {
        return $this->serve(UpdateFeature::class);
    }

}
