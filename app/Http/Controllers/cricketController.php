<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cricketController extends Controller
{
    public function index(){
        return view('main.cricket.index');
    }
}
