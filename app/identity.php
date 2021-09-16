<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class identity extends Model
{
    protected $fillable = [
        'last_name','first_name',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

}
