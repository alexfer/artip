<?php

namespace Artip\Services\Admin\Features\User;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use Artip\Domains\User\Jobs\PasswordJob;

class PasswordFeature extends Feature
{
    /**
     * 
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request)
    {
        $this->run(PasswordJob::class, [
            'input' => [
                'password' => $request->input('password'),
                'id' => $request->id,
            ],
        ]);
        
        return response()->json([
            'message' => _i('Password has been changed'),
        ]);
    }
}
