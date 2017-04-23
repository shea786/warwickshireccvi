<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Models
use App\Team;

class adminTeamsController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('admin.teams.index')->withTeams($teams);
    }
    
    public function create(){
        return view('admin.teams.create');
    }
    
    public function store(Request $request){
        //Validation
        
        //Store into database
        $team = new Team;
        $team->name = $request->name;
        $team->venue_id = 1;
        
        //get file from form and store it
        $logo = $request->file('logo');
        $logoName = $logo->getClientOriginalName();
        $team->logo = $logoName;
        $team->description = $request->description;
        $team->save();
        //Move Uploaded File
        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }
        if (!file_exists("uploads/teams")) {
            mkdir("uploads/teams", 0777, true);
        }
        if (!file_exists("uploads/teams/" . $team->id)) {
            mkdir("uploads/teams/" . $team->id, 0777, true);
        }
        $destinationPath = 'uploads/teams/' . $team->id;
        $logo->move($destinationPath,$logo->getClientOriginalName());
        
        //send notification
        
        //redirect if successful
        return redirect()->route('admin.teams.index');
    }
}
