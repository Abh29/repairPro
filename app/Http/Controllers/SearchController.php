<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\usersRating;
use App\Producer;

class SearchController extends Controller
{
    public function search()
    {
        $usersRating = new usersRating();
        $producer = new Producer();

        $searchInfo = request()->validate([
            'searchTag' => '',
            'category' =>'',
            'query' =>'',
        ]);

        $query = '';
        $sTag = 'profile';
        

        if(array_key_exists('searchTag',$searchInfo)){
            $query = $searchInfo['searchTag'];
            $sTag = $searchInfo['searchTag'];
        }else if(array_key_exists('query',$searchInfo)){
            $query = $searchInfo['query'];
        }

        $profiles = Profile::search($query);

        if(array_key_exists('category',$searchInfo)){
            
           /*  $profiles = $profiles->where('rating',4); */
        }
        $profiles = $profiles->paginate(5);

        

        //dd($profiles);

        return view('search.listing',compact('profiles','usersRating','sTag'));
    }
}
