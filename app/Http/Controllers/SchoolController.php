<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SchoolController extends Controller
{
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
