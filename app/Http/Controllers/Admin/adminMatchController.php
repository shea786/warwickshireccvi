<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Models
use App\Team;

class adminMatchController extends Controller
{
    public function index(){
        return view('admin.match.index');
    }
    
    public function create(){
        $teams = Team::pluck('name', 'id');
        return view('admin.match.create')->withTeams($teams);
    }
}
