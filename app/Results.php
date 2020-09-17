<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{


   /** Relationships **/

    // User relationship to the fees Model

     public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}

