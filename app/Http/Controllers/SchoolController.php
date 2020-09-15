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

 // function to handle the view
  public function dashboard(){

// retrive the home page
    return view('school.dashboard');
}

}
