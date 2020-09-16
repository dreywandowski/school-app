<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SchoolController extends Controller
{


/** users must be logged in before accessing any route under this controller
public function __construct()
    {
        $this->middleware('auth');
    }
**/

    // function to handle the view
  public function index(){

// retrive the home page
    return view('school.index');
}




 // function to handle the default dashboard view
  public function dashboard(){

    return view('school.dashboard');
}




 // function to handle the student dashboard view
  public function student(){

// retrive the home page
    return view('school.student');
}


 // function to handle the teacher dashboard view
  public function teacher(){

// retrive the home page
    return view('school.teacher');
}
}
