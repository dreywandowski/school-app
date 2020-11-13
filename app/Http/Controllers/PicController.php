<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pictures;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class PicController extends Controller
{
    
        // function to save image to the database and the flocal storage 
  public function index(Request $request){
   $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   ]);
   $imageName =time().'.'.$request->image->extension();

   $request->image->move(public_path('img/uploads'), $imageName);




$pic = new Pictures();
$pic->file_path = $request->image;
$pic->username = 'omolola';

$pic->save();

// retrive the home page
    return back()->with('msg', 'successssss');

}



}
