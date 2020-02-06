<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\Submission;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ReviewJob extends Job
{

    /**
     *
     * @var string
     */
    private $code;

    /**
     * 
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * 
     * @param Submission $submission
     * @return array
     * @throws \Exception
     */
    public function handle(Submission $submission): array
    {
        try {
            $submission = $submission->with(['question'])->where('access_code', $this->code)
                    ->first();
        } catch (ModelNotFoundException $ex) {
            throw new \Exception($ex->getMessage());
        }

        return $submission->toArray();
    }

}
