<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//models
use App\MatchType;
use App\Match;

class adminMatchTypeController extends Controller
{
    public function index(){
        $matchtypes = MatchType::all();
        return view('admin.matchType.index')->withMatchtypes($matchtypes);
    }
    
    public function create(){
        return view('admin.matchType.create');
    }
    
    public function store(Request $request){
        //validation
        
        //store into database
        $matchType = new MatchType;
        $matchType->display_name = $request->display_name;
        $matchType->name = $request->name;
        $matchType->description = $request->description;
        $matchType->save();
        
        //notification
        
        //redirection
        return redirect()->route('admin.matchType.index');
    }
    
    public function single($matchTypeID){
        $matches = Match::where('match_type','=',$matchTypeID)->get();
        return view('admin.matchType.single')->withMatches($matches);
    }
}
