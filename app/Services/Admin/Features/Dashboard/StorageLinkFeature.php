<?php

namespace Artip\Services\Admin\Features\Dashboard;

use Lucid\Foundation\Feature;
use Artip\Domains\Dashboard\Jobs\StorageLinkJob;

class StorageLinkFeature extends Feature
{

    /**
     * 
     * @return strin
     */
    public function handle()
    {
        try {
            $this->run(StorageLinkJob::class);
        } catch (\Exception $ex) {
            return response()->json([
                        'message' => $ex->getMessage(),
            ]);
        }
        return response()->json([
                    'message' => _i('Storage link successfully created.'),
        ]);
    }

}
