<?php

namespace App\Http\Controllers;


use App\Fees;
use Response;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    //


      // function to handle the view
  public function index(){

// retrive the home page
    return view('school.fees.fees');

}

/**
public function pricetableItemCreate(Request $request)
{
    
    $pricetableitem = new PriceTableItem();
    $input = $request->all();

    $pricetableitem->price_table_id = $input['price_table_id'];
    $pricetableitem->item_id = $input['item_id'];
    $pricetableitem->rate = $input['rate'];
    $pricetableitem->price = $input['price'];
    
    $pricetableitem->save();

    return response()->json($pricetableitem, 201);
}   
**/

     // function to handle the bills made
  public function handle(){

// create a new instance of the fees model
 $fees = new Fees();


error_log(request('email'));

return redirect('school.fees.fees');
// this allows for grabbing the post values and setting to the model

  

// save the data
        //$fees->save();

// we can use the "with" keyword as a means of storing session variables, which we can access wherever we want. It takes two parameter, the variable, and the message
        
        //return redirect('/school.student')->with('msg', 'Thanks for your order');

// retrive the home page

        //return response()->json($fees, 201);

        
    //return view('school.fees.handle_bills')->with('msg', 'Payment recorded successfully!!');


}



 



}