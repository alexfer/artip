<?php

namespace Artip\Services\Admin\Features\Media;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Media\Jobs\{
    UploadJob,
    CropJob
};

class UploadFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        try {
            $images = $this->run(UploadJob::class, [
                'files' => $request->file('files'),
            ]);
            
            $this->run(CropJob::class, [
                'images' => $images,
            ]);
            \Session::flash('alert-success', _i('Files uploaded  successfully.'));
        } catch (\Exception $ex) {
            \Session::flash('alert-danger', $ex->getMessage());
        }

        return response()->json([
                    'redirect' => $request->headers->get('referer'),
        ]);
    }

}
