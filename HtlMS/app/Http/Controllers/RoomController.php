<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms=Room::all();
        return view('rooms',['rooms'=>$rooms]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hotel_id' => 'required|numeric',
            'room_number' => 'required|string',
            'floor' => 'required|integer',
            'status' => 'required|string',
            'description' => 'nullable|string',
            'price_per_night' => 'required|numeric',
        ]);
        Room::create($validatedData);
        return redirect()->route('rooms.create');
    }
    

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        // Retrieve the room by ID
        $room = Room::findOrFail($id);

        // Return the view with the room data
        return view('rooms-edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'hotel_id' => 'required|numeric',
            'room_number' => 'required|string',
            'floor' => 'required|integer',
            'status' => 'required|string',
            'description' => 'nullable|string',
            'price_per_night' => 'required|numeric',
        ]);

        // Find the room by ID and update it
        $room = Room::findOrFail($id);
        $room->update($validatedData);

        // Redirect to a success page or do something else
        return redirect()->route('rooms.create');
    }

    public function destroy($id)
    {
        // Find the room by ID and delete it
        $room = Room::findOrFail($id);
        $room->delete();

        // Redirect to a success page or do something else
        return redirect()->route('rooms.create');
    }
}

