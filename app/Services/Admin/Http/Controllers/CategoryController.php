<?php

namespace Artip\Services\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\Category\{
    CollectionFeature,
    CreateFeature,
    AppendFeature,
    GetFeature,
    RebuildTreeFeature,
    UpdateFeature,
    DeleteFeature,
    FormFeature
};

class CategoryController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (!isset($request->input()['children'])) {
            return $this->serve(CreateFeature::class);
        } else {
            return $this->serve(AppendFeature::class);
        }
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
    public function edit()
    {
        return $this->serve(GetFeature::class);
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
    public function rebuildTree()
    {
        return $this->serve(RebuildTreeFeature::class);
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        return $this->serve(DeleteFeature::class);
    }

}
