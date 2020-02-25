<?php

namespace Artip\Services\Web\Features\Content;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Http\Jobs\RespondWithViewJob;
use Artip\Domains\Content\Jobs\AnnoncePageJob;
use Artip\Domains\Content\Jobs\Widget\LatestJob;

class AnnoncesFeature extends Feature
{

    const TEMPLATE = 'web::single-pages.annonce';

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $annonce = $this->run(AnnoncePageJob::class, [
            'id' => $request->id,
        ]);

        if (!count($annonce)) {
            return redirect(route('index'));
        }

        return $this->run(new RespondWithViewJob(self::TEMPLATE, [
                            'annonce' => $annonce,
                            'news' => $this->run(LatestJob::class, [
                                'notIn' => $request->id,
                                'limit' => 5,
                            ]),
        ]));
    }

}
