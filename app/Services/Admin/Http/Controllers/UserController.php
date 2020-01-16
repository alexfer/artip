<?php

namespace Artip\Services\Admin\Http\Controllers;

use Lucid\Foundation\Http\Controller;
use Artip\Services\Admin\Features\User\{
    CollectionFeature,
    GetFeature,
    UpdateFeature,
    FormFeature,
    CreateFeature,
    PasswordFeature
};

class UserController extends Controller
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
    public function update()
    {
        return $this->serve(UpdateFeature::class);
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
    public function password()
    {
        return $this->serve(PasswordFeature::class);
    }

}
