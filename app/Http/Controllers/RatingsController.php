<?php

namespace App\Http\Controllers;

use App\usersRating;
use App\Report;
use Illuminate\Http\Request;
use App\user;

class RatingsController extends Controller
{
   
    public function rate(User $user)
    {
        
        $res = 'done!';
        $data = request()->validate([
            'user_id' => '',
            'rating' => '',
            'description' => '',
        ]);

        $usersRating = usersRating::where([
            'profile_id' => $user->profile->id,
            'user_id' => $data['user_id'],
        ])->get()->first();
        
        if($usersRating != null){
              $res = "your rating is updated !";
              $usersRating->update($data);
            }
        else{
        $usersRating = new usersRating();
        
        $usersRating->profile_id = $user->profile->id;
        $usersRating->user_id = $data['user_id'];
        $usersRating->description = $data['description'];
        $usersRating->rating = $data['rating'];

        $usersRating->save();
        $user->push();
        }

        return $res;
    }

    public function report(User $user)      
    {
        $res = 'done!';
        $data = request()->validate([
            'user_id' => '',
            'reason' => '',
            'description' => '',
        ]);

        $Report = Report::where([
            'profile_id' => $user->profile->id,
            'user_id' => $data['user_id'],
        ])->get()->first();
        
        if($Report != null){
              $res = "your report is submited !";
              $Report->update($data);
            }
        else{
        $Report = new Report();
        
        $Report->profile_id = $user->profile->id;
        $Report->user_id = $data['user_id'];
        $Report->description = $data['description'];
        $Report->reason = $data['reason'];

        $Report->save();
        $user->push();
        }

        return $res;
    }
}
