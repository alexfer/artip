<?php

namespace Artip\Domains\User\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\User;

class PasswordJob extends Job
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
     * @param User $user
     * @return void
     */
    public function handle(User $user): void
    {
        $user->where('id', $this->input['id'])
                ->update([
                    'password' => \Hash::make($this->input['password']),
        ]);
    }

}
