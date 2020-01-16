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
    UpdateFeature,
    DeleteFeature,
    RestoreFeature
};

class ContentController extends Controller
{

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        return $this->serve(GetFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return $this->serve(FormFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->serve(CreateFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function publish()
    {
        return $this->serve(PublishFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function unpublish()
    {
        return $this->serve(UnpublishFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return $this->serve(UpdateFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        return $this->serve(DeleteFeature::class);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function restore()
    {
        return $this->serve(RestoreFeature::class);
    }

}
