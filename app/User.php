<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    use Searchable;
    
    public function searchableAs()
    {
        return 'user';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user){
            $user->avatar = "/images/no-image-available.png";
            $user->profile()->create([
                'title' => "tmp title",
                'profileImage' => "/images/no-image-available.png"
            ]);
        });
    }

    protected $fillable = [
        'name','user_name', 'email', 'password','isAServiceProvider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


}
