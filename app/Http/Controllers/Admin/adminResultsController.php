<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//models
use App\Match;
use App\Scorecard;
//other
use Carbon\Carbon;
class adminResultsController extends Controller
{
    public function index(){
        $matches = Match::where('start_date_and_time', '<=', Carbon::now())->where('season_id','=',1)->get();
        return view('admin.results.index')->withMatches($matches);
    }
    
    public function add(Request $request){
        $match_id = $request->match_id;
        //Check if scorecard does not exists
        if (!Scorecard::where('match_id', '=',$match_id)->exists()) {
            //create new scorecard
            $newScorecard = new Scorecard;
            $newScorecard->match_id = $match_id;
            $newScorecard->toss = $request->toss;
            $newScorecard->toss_result = $request->tossResult;
            $newScorecard->save();
            
        }
        
        return redirect()->route('admin.results.scorecard',$match_id);
    }
    
    public function scorecard($match_id){
        $scorecard = Scorecard::where('match_id','=',$match_id)->first();
        return view('admin.results.scorecard')->withScorecard($scorecard);
    }
}
