<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchType extends Model
{
    public function match()
    {
        return $this->hasMany('App\Match','match_type','id');
    }
}
