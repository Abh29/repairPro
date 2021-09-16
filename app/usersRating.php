<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersRating extends Model
{
    protected $fillable = [
        'user_id','description','rating',
    ];

    /* public function profile()
    {
        return $this->belongsTo(Profile::class);
    } */
}
