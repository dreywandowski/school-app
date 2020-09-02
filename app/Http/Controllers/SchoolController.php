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

}
