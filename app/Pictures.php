<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
  
protected $fillable = [
        'username', 'file_path',
    ];
   //protected $primaryKey = 'username';

   //public $incrementing = false;

   //relationship to user model
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
