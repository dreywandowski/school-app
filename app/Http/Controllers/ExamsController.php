<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class ExamsController extends Controller
{
    //

      // function to handle the view
  public function index(){




// retrive the home page
    return view('school.exams.exams');
}

use AuthenticatesUsers;
 public function auth(){

 
}



}
