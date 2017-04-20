<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class adminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }
    
    public function showLoginForm(){
        return view('auth.admin-login');
    }
    
    public function login(Request $request){
        //validate form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        //attempt to log the admin in
        $credentials = ['email' => $request->email,'password' => $request->password];
        $remember = $request->remember;
        if(Auth::guard('admin')->attempt($credentials,$remember)){
            //if successfull then redirect to their intended location
            return redirect()->intended(route('admin.home.index'));
        }
        
        //if unsuccessful then redirect back to login with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}