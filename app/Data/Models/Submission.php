<?php

namespace Artip\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{

    /**
     * @var string
     */
    protected $table = 'submissions';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'message',
        'visitor',
        'is_new',
        'owner_id',
        'is_answered',
        'user_id',
        'access_code'
    ];

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function answer()
    {
        return $this->hasOne(Submission::class, 'owner_id');
    }

}
