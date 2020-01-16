<?php

namespace Artip\Services\Web\Features\Home;

use Lucid\Foundation\Feature;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\Widget\LatestJob;

class IndexFeature extends Feature
{

    const TEMPLATE = 'web::home.index';

    /**
     * 
     * @return mixed
     */
    public function handle()
    {
        file_put_contents("/var/www/tmp/response.log", var_export($this->run(LatestJob::class, [
                                'service' => 'news',
                                'limit' => 5,
                            ])->toArray(), true));
        
        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'news' => $this->run(LatestJob::class, [
                                'service' => 'news',
                            ])
        ]));
    }

}
