<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Profile extends Model
{
    use Searchable;
    
    public function searchableAs()
    {
        return 'profile';
    }

    /* public function shouldBeSearchable()
    {
        return $this->isPublished();
    } */

    public function toSearchableArray()
    {
        $searchArray['user_name'] = $this->user_name;
        $searchArray['title'] = $this->title;
        $searchArray['description'] = $this->description;
        $searchArray['email'] = $this->user->email;
        $searchArray['last_name'] = $this->identity->last_name;
        $searchArray['first_name'] = $this->identity->first_name;
        $searchArray['wilaya'] = $this->identity->wilaya;
        $searchArray['commune'] = $this->identity->commune;
        $searchArray['phone'] = $this->contact->phone;
        $ratingAVG = UsersRating::where('profile_id',$this->id)->get()->avg('rating');
        $searchArray['rating'] = round($ratingAVG,1);
        


    

        return $searchArray;
    }
    protected $fillable = [
        'user_name','title','profileImage','description','url',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($profile){
            $profile->contact()->create();
            $profile->identity()->create();
            $profile->location()->create();
           // $profile->usersRating()->create();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function identity()
    {
        return $this->hasOne(identity::class);
    }
    
    public function location()
    {
        return $this->hasOne(location::class);
    }

    public function contact()
    {
        return $this->hasOne(contact::class);
    }
    
    /* public function usersRating()
    {
        return $this->hasOne(usersRating::class);
    } */

}
