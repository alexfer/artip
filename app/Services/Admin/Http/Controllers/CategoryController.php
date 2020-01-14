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

    public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }


    /**
     * Show the form for creating a new resource.
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
    
    public function form()
    {
        return $this->serve(FormFeature::class);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return $this->serve(GetFeature::class);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return $this->serve(UpdateFeature::class);
    }

    /**
     * Rebuild tree
     *
     * @param Request $request
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
