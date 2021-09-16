<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $fillable = [
        'user_id','category','isVerified','isPublic','business_name','business_description'
    ];
}
