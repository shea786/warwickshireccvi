<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
//models
use App\Match;
use App\MatchType;

class fixturesController extends Controller
{
    public function index(){
        $matchtypes = MatchType::all();
        $fixtures = Match::where('start_date_and_time', '>=', Carbon::now())->get();
        return view('main.fixtures.index')->withFixtures($fixtures)->withMatchtypes($matchtypes);
    }
}
