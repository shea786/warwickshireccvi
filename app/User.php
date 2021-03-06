<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Hootlex\Moderation\Moderatable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Moderatable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profile()
    {
        return $this->hasOne('App\Profile','user_id','id');
    }
}
