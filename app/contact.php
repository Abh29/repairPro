<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'phone','fix',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
