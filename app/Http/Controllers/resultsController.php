<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use App\Match;
use App\MatchType;
//other
use Carbon\Carbon;

class resultsController extends Controller
{
    public function index(){
        $matchtypes = MatchType::all();
        $results = Match::where('start_date_and_time', '<=', Carbon::now())->get();
        return view('main.results.index')->withResults($results)->withMatchtypes($matchtypes);
    }
}
