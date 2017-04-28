<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//models
use App\Match;
use Carbon\Carbon;

class homeController extends Controller
{
    public function index(){
        $fixture = Match::where('start_date_and_time', '>=', Carbon::now())->first();
        $next_match = Carbon::parse($fixture->start_date_and_time)->format('M d, Y H:i:s');
        return view('main.home.index')->withFixture($fixture)->withNext_match($next_match);
    }
}
