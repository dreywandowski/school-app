<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pictures;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
//use Session;

class PicController extends Controller
{
    
        // function to save image to the database and the flocal storage 
  public function index(Request $request){

  	// find if user already has a picture in the database
  $user = Auth::user()->username;

$user_pic = Pictures::where('username', '=', $user)->get(['file_path']);
/**foreach ($user_pic as $pic){echo $pic;}

echo sizeof($user_pic);**/


	$request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   ]);
   $imageName =time().'.'.$request->image->extension();

   $request->image->move(public_path('img/uploads'), $imageName);

   $file_path = "/img/uploads/".$imageName;


if(sizeof($user_pic) == 0){
$pic = new Pictures();
$pic->file_path = $file_path;
$pic->username = $user;


$pic->save();

// retrive the home page
    return back();

}

// update already existing picture in the DB
else{
    /** $user_pic = new Pictures();
	$path =  Pictures::where('username', '=', $user)->get(['file_path']);
	//return $upload;

	$user_pic->file_path = $file_path;
	$user_pic->username = $user;
//$user_pic->update($request->only(['file_path']));
$user_pic->save();**/

	$user_pic =  Pictures::where('username', '=', $user)->update(['file_path' => $file_path]);


// retrive the home page
    return back();


}
   
}


public function showPic(){
$user = Auth::user()->username; 

//$pic = new Pictures();
$user_pic = Pictures::where('username', '=', $user)->get(['file_path']);

return view('school.student', [
        'file_path' => $user_pic, 
    ]);


}


}
