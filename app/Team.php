<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** The players that belong to a team */
    public function players(){
        return $this->belongsToMany('App\Player');
    }
}
