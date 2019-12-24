<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\User\{
    CollectionFeature,
    GetFeature,
    UpdateFeature,
    FormFeature,
    CreateFeature
};

class UserController extends Controller
{

    public function collection()
    {
        return $this->serve(CollectionFeature::class);
    }

    public function get()
    {
        return $this->serve(GetFeature::class);
    }

    public function update()
    {
        return $this->serve(UpdateFeature::class);
    }

    public function form()
    {
        return $this->serve(FormFeature::class);
    }

    public function create()
    {
        return $this->serve(CreateFeature::class);
    }

}
