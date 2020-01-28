<?php

namespace Artip\Services\Web\Features\Action;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Action\Jobs\{
    SubmissionJob,
    SubmissionValidateJob
};

class SubmissionFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return string
     */
    public function handle(Request $request)
    {
        try {
            $this->run(SubmissionValidateJob::class, [
                'input' => $request->input(),
            ]);
            $this->run(SubmissionJob::class, [
                'input' => $request->only([
                    'name',
                    'email',
                    'message',
                ]),
            ]);
        } catch (\Exception $ex) {           
            return response()->json([
                        'errors' => explode(PHP_EOL, $ex->getMessage()),
                            ]);
        }

        return response()->json([
                    'message' => _i('Your message has been sent succesfully.'),
        ]);
    }

}
