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



     // function to handle the bills made
  public function handle(){

// create a new instance of the fees model

        $fees = new Fees();

// this allows for grabbing the post values and setting to the model

        $fees->user = request('user');
        $fees->email = request('email');
        $fees->amount = request('amount');
        $fees->payment_ref = request('payment_ref');
        


// save the data
        $fees->save();

// we can use the "with" keyword as a means of storing session variables, which we can access wherever we want. It takes two parameter, the variable, and the message
        
        //return redirect('/school.student')->with('msg', 'Thanks for your order');

// retrive the home page
    return view('/school.student');


}



 



}