<?php

namespace Artip\Domains\User\Jobs;

use Lucid\Foundation\Job;
use Artip\Data\Models\User;

class CreateJob extends Job
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
     * @return object
     * @throws \Exception
     */
    public function handle(User $user): object
    {
    	 $this->input['password'] = \Hash::make($this->input['password']);

    	 try {
            $user = $user->create($this->input);
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

        return $user;
    }
}