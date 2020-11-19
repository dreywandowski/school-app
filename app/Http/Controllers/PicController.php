<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//use App\Pictures;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
//use Session;

class PicController extends Controller
{
    
        // function to save image to the database and the local storage 
  public function index(Request $request){

  	// find if user already has a picture in the database
  $user = Auth::user()->username;

$user_pic = Auth::user()->where('username', '=', $user)->get(['file_path']);


	$request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   ]);
   $imageName =time().'.'.$request->image->extension();

   $request->image->move(public_path('img/uploads'), $imageName);

   $file_path = "/img/uploads/".$imageName;

$user_pic =  Auth::user()->where('username', '=', $user)->update(['file_path' => $file_path]);

    return back();
// create a new image if no image exists in the db
/**if(sizeof($user_pic) == 0){
$pic = new Auth::user();
$pic->file_path = $file_path;
//$pic->username = $user;


$pic->save();

// retrive the home page
    return back();

}**/

// update already existing picture in the DB
//else{

	


//}
   
}



// displays the profile picture
/**public function showPic(){
	$user = Auth::user()->username;
	
	return view('school.student', [
        'file_path' => $user_pic, 
    ]);


//$pic = new Pictures();
$user_pic = Auth::user()->where('username', '=', $user)->get(['file_path']);

  /**$user = \Auth::user()->username;
  
//$pic = new Pictures();
$user_pic = Pictures::where('username', '=', $user)->get(['file_path']);

echo $user_pic->first();
/**print_r($user_pic);
dd($det);
//echo gettype($user_pic);
//var_dump($user_pic);
**/

/**
$det = (array)$user_pic;


if ($user_pic->first()){
  echo "akwai pinshure";
$userArray = $user_pic->toArray();
  return view('school.fees.fees')->with('file_path', $userArray);
}


//if(sizeof($user_pic) == 0){
else{**/

   //echo "no pic";

 // $paths = "/img/male-profile-picture.jpg";

  // return view('school.fees.fees', $paths);

 /** $path = ['pic' => $paths];

  print_r($paths);

  return view('school.fees.fees', ['data' =>$path]);
}





//dd($userArray);
//print_r($userArray);
                    
 //echo "        ";               



  //$show = (object)$path;
//print_r($show);

 



//}
**/



//else {


//}



//}






}
