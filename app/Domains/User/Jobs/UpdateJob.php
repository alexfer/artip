<?php

namespace Artip\Domains\User\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\User;

class UpdateJob extends Job
{

    /**
     *
     * @var array
     */
    private $input;

    /**
     * 
     * @param array $id
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }

    /**
     * 
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function handle(User $user): bool
    {
        try {
            $user = $user->where('id', $this->input['id'])
                    ->update($this->input);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

        return $user;
    }

}
