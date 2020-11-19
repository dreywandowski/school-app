<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Pictures;


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


 




 // function to handle the default success view
  public function register(){

if (Auth::check()){

  if (Auth::user()->role == 'student') {
       return  redirect('/school/student');
    }
    else if (Auth::user()->role == 'teacher'){
        return  redirect('/school/teacher');
    }
    else{

    }


}

else{ 
  return view('school.success');
}
   
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
