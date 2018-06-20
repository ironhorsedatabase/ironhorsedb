<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /** The teams that belong to a tournament */
    public function teams(){
        return $this->belongsToMany('App\Team');
    }
}
