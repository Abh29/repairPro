<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;
use App\usersRating;

class ProfilesController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update()
    {
         $profile = request()->validate([
            'title' => '',
            'description' =>'',
            'profileImage' =>['image','max:8000'],
        ]);
        $identity = request()->validate([
            'first_name' =>'',
            'last_name' =>'',
        ]);
        $location = request()->validate([
            'wilaya' => '',
            'commune' =>'',
            'adress' => '',
        ]);

        $contact = request()->validate([
            'fix'=>'',
            'phone' => '',
        ]);


        if(request('profileImage')){
            $path = $profile['profileImage'];
            $path = "/storage/".request('profileImage')->store('uploads/profileImages','public');
            $image = Image::make(public_path("{$path}"))->fit(300,300);
            $image->save();
            $profile = array_merge($profile , ['profileImage' => $path]);
        }

        
        auth()->user()->profile->update($profile);
        auth()->user()->profile->location->update($location);
        auth()->user()->profile->contact->update($contact);
        auth()->user()->profile->identity->update($identity);

            
        return redirect('/');



    }


    public function index(User $user)
    {
        $usersRating = usersRating::find(1);
        if($usersRating == null)
        $usersRating = new usersRating();

        return view('profile.index',compact('user','usersRating'));
    
    }
}
