<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotel=new Hotel();
        return view('index',['hotels'=>$hotel]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $hotel=new Hotel();
            $hotel->name= $request->name;
            $hotel->address=$request->address;
            $hotel->location=$request->location;
            $hotel->contact_number=$request->contact_number;
            $hotel->email=$request->email;
            $hotel->description=$request->description;
            $hotel->rooms=$request->rooms;
            $hotel->facilities=$request->facilities->nullable();
            $hotel->save();
            return redirect (route('hotel.index'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $hotel=Hotel::find($id);
        return view('edithotel',['hotel'=>$hotel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
