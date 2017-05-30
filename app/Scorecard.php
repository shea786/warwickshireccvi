<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scorecard extends Model
{
    public function match()
    {
        return $this->hasOne('App\Match','id','match_id');
    }
    
    public function tossModel()
    {
        return $this->hasOne('App\Team','id','toss');
    }
}
