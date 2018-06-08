<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /** The teams that belong to a player */
    public function teams(){
        return $this->belongsToMany('App\Team');
    }
}
