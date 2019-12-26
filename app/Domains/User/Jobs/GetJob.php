<?php

namespace Artip\Domains\User\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\User;

class GetJob extends Job
{

    /**
     *
     * @var int
     */
    private $id;

    /**
     * 
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @param User $user
     * @return array
     */
    public function handle(User $user): array
    {
        return $user->find($this->id)->toArray();
    }

}
