<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesController extends Controller
{
    //


      // function to handle the view
  public function index(){

// retrive the home page
    return view('school.fees.fees');

}

     // function to handle the handleing
  public function handle(){

// retrive the handling page
    return view('school.fees.handle_bills');

}



     /** function to handle the bills made
  public function handle(){

 // create a new instance of the fees model

        $fees = new Fees();

// this allows for grabbing the post values and setting to the model

        $fees->name = request('fname');
        $fees->type = request('name');
        $fees->type = request('type');
        $fees->price = request('price');
        $fees->extras = request('extras');


// save the data
        $pizza->save();

// we can use the "with" keyword as a means of storing session variables, which we can access wherever we want. It takes two parameter, the variable, and the message
        
        return redirect('/pizzas')->with('msg', 'Thanks for your order');
// retrive the home page
    return view('school.fees.handle');

}**/


}