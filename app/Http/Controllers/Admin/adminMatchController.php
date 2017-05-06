<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Models
use App\Match;
use App\Team;
use App\Venue;
use App\MatchType;

class adminMatchController extends Controller
{
    public function index(){
        $matches = Match::orderBy('start_date_and_time','asc')->get();
        return view('admin.match.index')->withMatches($matches);
    }
    
    public function create(){
        $teams = Team::pluck('name', 'id');
        $venues = Venue::pluck('club_name', 'id');
        $matchtypes = MatchType::pluck('display_name', 'id');
        return view('admin.match.create')->withTeams($teams)->withVenues($venues)->withMatchtypes($matchtypes);
    }
    
    public function store(Request $request){
        //validation
        
        //store into database
        $match = new Match;
        $match->match_type = $request->matchType;;
        $match->season_id = 1;
        $match->home_team = $request->hometeam;
        $match->away_team = $request->awayteam;
        $match->venue_id = $request->venue;
        $match->start_date_and_time = $request->start_date_and_time;
        $match->save();
        //notifications
        
        //redirect
        return redirect()->route('admin.match.index');
    }
}
