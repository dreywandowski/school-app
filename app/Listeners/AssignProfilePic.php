<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Pictures;

class AssignProfilePic
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewUserRegistered $event)
    {
       //creates an empty profile picture for every new user after registering

        $pic = new Pictures();
         $user = $event->username;
       $pic->file_path = "/img/male-profile-picture.jpg";
       $pic->username = $user;

$pic->save();
    }
}
