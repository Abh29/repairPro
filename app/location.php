<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    
    protected $fillable = [
        'wilaya','commune','adress',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

}
