<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use Carbon\Carbon;

class myProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    public function showMyProfileSection(){
        $profile = Profile::where('user_id','=',Auth::user()->id)->first();
        return view('main.myProfile.showMyProfileSection')->withProfile($profile);
    }
    
    public function create(){
        return view('main.myProfile.create');
    }
    
    public function store(Request $request){
        //form vaildation
        $this->validate($request, [
            'dob' => 'required',
            'height' => 'required',
            'weight' => 'required',
        ]);
        //insert data from form into database
        $profile = new Profile;
        $profile->user_id = Auth::user()->id;
        $profile->description = $request->description;
        $profile->debut = $request->debut;
        $profile->date_of_birth = $request->dob;;
        $profile->nationality = $request->nationality;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->twitter = $request->twitter;
        $profile->facebook = $request->facebook;
        $profile->instagram = $request->instagram;
        $profile->snapchat = $request->snapchat;
        $profile->shirt_number = $request->shirt_number;
        $profile->save();
        
        //create notifiaction
        
        //redirect to a page
        return redirect()->route(['profile.single',Auth::user()->username]);
        
    }
}
