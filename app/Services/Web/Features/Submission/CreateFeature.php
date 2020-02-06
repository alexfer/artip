<?php

namespace Artip\Services\Web\Features\Submission;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Submission\Jobs\{
    CreateJob,
    ValidateJob,
    SendMailJob
};

class CreateFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return string
     */
    public function handle(Request $request)
    {
        try {
            $this->run(ValidateJob::class, [
                'input' => $request->input(),
            ]);
            $submission = $this->run(CreateJob::class, [
                'input' => $request->only([
                    'name',
                    'email',
                    'message',
                ]),
            ]);
            $this->run(SendMailJob::class, [
                'data' => [
                    'from' => [
                        'email' => $submission->email,
                        'name' => $submission->name,
                    ],
                    'to' => env('SUBMISSION_EMAIL'),
                    'template' => 'web::emails.submission',
                    'subject' => _i('You have got new submission.'),
                    'body' => [
                        'url' => _i('You have got new submission. To review go to the page %s', sprintf("%s/admin/submission/%s", env('APP_URL'), $submission->id)),
                    ],
                ],
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
