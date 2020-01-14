<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Lucid\Foundation\InvalidInputException;
use Artip\Domains\Category\Jobs\UpdateTreeJob;
use Artip\Domains\Http\Jobs\RespondWithJsonJob;

class RebuildTreeFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return string
     */
    public function handle(Request $request)
    {
        try {
            $this->run(UpdateTreeJob::class, [
                'tree' => $request->json()
                        ->all(),
            ]);

            return $this->run(new RespondWithJsonJob([]));
        } catch (InvalidInputException $ex) {

            return $this->run(new RespondWithJsonJob(
                                    ['errors' => [$ex->getMessage()]],
                                    400
            ));
        }
    }

}
