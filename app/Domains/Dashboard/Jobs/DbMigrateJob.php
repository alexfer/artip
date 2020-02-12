<?php

namespace Artip\Domains\Dashboard\Jobs;

use Lucid\Foundation\Job;
use Illuminate\Support\Facades\Artisan;

class DbMigrateJob extends Job
{

    /**
     * 
     * @return void
     * @throws \Exception
     */
    public function handle(): void
    {
        try {
            Artisan::call('migrate', []);            
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
