<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Illuminate\Support\Facades\App;
use Artip\Domains\Category\Jobs\DeleteJob;

class DeleteFeature extends Feature
{

    /**
     * 
     * @param Request $request
     */
    public function handle(Request $request)
    {
        $this->run(DeleteJob::class, [
            'id' => $request->id,
        ]);
        
        return response()->json(['redirect' => route('category.collection')]);
    }

}
