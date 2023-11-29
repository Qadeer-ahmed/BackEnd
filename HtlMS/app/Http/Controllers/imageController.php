<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
 
use App\Models\Image;
use Illuminate\Http\Request;

class imageController extends Controller
{
   public function showimageform(){
    return view("uploadimage");

   }


public function uploadImage(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $uploadedFile = $request->file('image');
    $filename = time() . '_' . $uploadedFile->getClientOriginalName();

    // Store the image in the storage directory
    Storage::disk('public')->put($filename, file_get_contents($uploadedFile));

    // Save the image details in the database
    $image = new Image();
        
        
        $image->filename = $filename ;
        $image->original_filename = $uploadedFile->getClientOriginalName();
        $image->caption=$request->caption;
        $image->alt_text=$request->alt_text;
        
       
    

    $image->save();

    return redirect()->back()->with('success', 'Image uploaded successfully.');
}

}
