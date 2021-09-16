<?php

namespace App\Http\Controllers;

use App\Producer;
use Illuminate\Http\Request;

class ProducersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.upgrade');
    }
    

    public function upgrade()
    {   
        
        $data = request()->validate([
            'business_name' =>'',
            'business_description' => '',
            'category' =>'',
        ]);

       $producer = new Producer();

       $producer->user_id = auth()->user()->id;
       $producer->business_name = $data['business_name'];
       $producer->business_description = $data['business_description'];
       $producer->category = $data['category'];

            $producer->save();
            auth()->user()->isAServiceProvider = true;

        return redirect('/');

    }
}
