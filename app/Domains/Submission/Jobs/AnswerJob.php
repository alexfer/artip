<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Submission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AnswerJob extends Job
{

    /**
     *
     * @var array
     */
    private $input;

    /**
     * 
     * @param array $input
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }

    /**
     * 
     * @return object
     */
    public function handle(): object
    {
        Submission::where('id', $this->input['id'])
                ->update([
                    'is_answered' => true,
        ]);

        return Submission::create([
                    'user_id' => \Auth::user()->id,
                    'name' => \Auth::user()->name,
                    'email' => env('SUBMISSION_EMAIL'),
                    'visitor' => request()->ip(),
                    'message' => $this->input['answer'],
                    'owner_id' => $this->input['id'],
                    'access_code' => Str::random(36),
        ]);
    }

}
