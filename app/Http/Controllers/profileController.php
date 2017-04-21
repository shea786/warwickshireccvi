<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class profileController extends Controller
{
    public function single($username){
        $user = User::where('username','=',$username)->first();
        return view('main.profile.single')->withUser($user);
    }
}
