<?php

namespace Artip\Domains\Dashboard\Jobs;

use Lucid\Foundation\Job;
use Illuminate\Support\Facades\Artisan;

class StorageLinkJob extends Job
{

    /**
     * 
     * @return void
     * @throws \Exception
     */
    public function handle(): void
    {
        try {
            //Artisan::call('storage:link', []);
            symlink('/home/alex2178/domains/artip.com.ua/storage/app/public/media', '/home/alex2178/domains/artip.com.ua/public_html/storage/media');
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
