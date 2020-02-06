<?php

namespace Artip\Services\Admin\Features\Submission;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\Submission\Jobs\{
    AnswerJob,
    SendMailJob
};

class AnswerFeature extends Feature
{

    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $submission = $this->run(AnswerJob::class, [
            'input' => $request->input(),
        ]);

        $this->run(SendMailJob::class, [            
            'data' => [
                'from' => [
                    'email' => $submission->email,
                    'name' => $submission->name,
                ],
                'to' => $request->input('email'),
                'template' => 'admin::emails.answer',
                'subject' => _i('Answer on your submission.'),
                'body' => [
                    'url' => _i('Hello %s, You can review answer on your submission on the page %s', $request->input('name'), sprintf("%s/submission/%s", env('APP_URL'), $submission->access_code)),
                ],
            ],
        ]);
        
        \Session::flash('alert-success', _i('Your message successfully sent. For review go to the <a href="%s">page</a>', sprintf("%s/submission/%s", env('APP_URL'), $submission->access_code)));
        
        return redirect(route('submission.form', [
            'id' => $request->input('id'),
        ]));
    }

}
