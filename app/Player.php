<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /** The teams that belong to a player */
    public function teams(){
        return $this->belongsToMany('App\Team');
    }

    /** Checks to see if a value is null and returns NA if true and the value if not*/
    public function checkIfNull($value) {
        if (is_null($value))
        {
            return("N/A");
        }
        else
        {
            return($value);
        }
    }


}
