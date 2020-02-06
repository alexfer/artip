<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Submission;

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
     * @return bool
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
        ]);
    }

}
