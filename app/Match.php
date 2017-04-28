<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function home_team_model()
    {
        return $this->hasOne('App\Team','id','home_team');
    }
    
    public function away_team_model()
    {
        return $this->hasOne('App\Team','id','away_team');
    }
    
    public function venue_model()
    {
        return $this->hasOne('App\Venue','id','venue_id');
    }
    
    public function matchType()
    {
        return $this->belongsTo('App\MatchType','id','match_type');
    }
}
