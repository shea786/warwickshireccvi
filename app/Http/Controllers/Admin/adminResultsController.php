<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//models
use App\Match;
//other
use Carbon\Carbon;
class adminResultsController extends Controller
{
    public function index(){
        $matches = Match::where('start_date_and_time', '<=', Carbon::now())->get();
        return view('admin.results.index')->withMatches($matches);
    }
}
