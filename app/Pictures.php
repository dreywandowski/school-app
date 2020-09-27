<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    //relationship to user model
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
