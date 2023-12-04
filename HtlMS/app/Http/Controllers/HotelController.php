<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    // Other methods...

    public function create(Request $request)
    {
      $hotel=new Hotel;
            $hotel->name=$request->name;
            $hotel->location=$request->location;
            $hotel->contact_number=$request->contact_number;
            $hotel->email=$request->email;
            $hotel->description=$request->description;
            $hotel->rooms=$request->rooms;
            $hotel->facilities=$request->facilities;
            $hotel->address=$request->address;
            $hotel->name=$request->name;
            
          
            $hotel->save();
        

        return redirect()->route('hotel.index');
    }
    public function index(){
        $hotels=hotel::all();


        return view('index',['hotels'=>$hotels]);
    }
    public function list()
    {
        // Implementation for listing hotels
        // Fetch hotels from the database and pass them to the view

        // Example:
         $hotels = Hotel::all();
         return view('list', compact('hotels'));
    }

    public function edit($id)
    {
      


        $hotel = Hotel::find($id);
        return view('edithotel', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
    
         $hotel = Hotel::find($id);
         $hotel->name=$request->name;
         $hotel->location=$request->location;
         $hotel->contact_number=$request->contact_number;
         $hotel->email=$request->email;
         $hotel->description=$request->description;
         $hotel->rooms=$request->rooms;
         $hotel->facilities=$request->facilities;
         $hotel->address=$request->address;
         $hotel->name=$request->name;
         return redirect()->route('hotel.index');
         
    }
    
              
    

    public function destroy($id)
    {
       
         $hotel = Hotel::find($id);
         $hotel->delete();


        return redirect()->route('hotel.index');
    }

        // Redirect or return a response as needed
    }
    
