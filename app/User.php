<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /** Relationships **/

    // User relationship to the fees Model
     public function fees()
    {
        return $this->hasMany('App\Fees');
    }



     // User relationship to the results Model
     public function results()
    {
        return $this->hasMany('App\Results');
    }



     // User relationship to the courses Model
     public function courses()
    {
        return $this->hasMany('App\Courses');
    }

}
