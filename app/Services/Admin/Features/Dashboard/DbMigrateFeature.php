<?php

namespace Artip\Services\Admin\Features\Dashboard;

use Lucid\Foundation\Feature;
use Artip\Domains\Dashboard\Jobs\DbMigrateJob;

class DbMigrateFeature extends Feature
{

    /**
     * 
     * @return strin
     */
    public function handle()
    {
        try {
            $this->run(DbMigrateJob::class);
        } catch (\Exception $ex) {
            return response()->json([
                        'message' => $ex->getMessage(),
            ]);
        }
        return response()->json([
                    'message' => _i('Migration sucessfully created.'),
        ]);
    }

}
