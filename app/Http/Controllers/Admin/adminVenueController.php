<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Models
use App\Venue;
use App\Team;

class adminVenueController extends Controller
{
    public function index(){
        $venues = Venue::all();
        return view('admin.venue.index')->withVenues($venues);
    }
    
    public function create(){
        return view('admin.venue.create');
    }
    
    public function store(Request $request){
        //validation
        
        //store into database
        $venue = new Venue;
        $venue->club_name = $request->club_name;
        $venue->address_1 = $request->address_1;
        $venue->address_2 = $request->address_2;
        $venue->city_town = $request->city_town;
        $venue->County = $request->county;
        $venue->Country = "United Kingdom";
        $venue->post_code = $request->post_code;
        $venue->thumbnail = $request->thumbnail;
        $venue->description = $request->description;
        $venue->save();
        
        //send notification
        
        //redirect page
        return redirect()->route('admin.venue.index');
    }
}
