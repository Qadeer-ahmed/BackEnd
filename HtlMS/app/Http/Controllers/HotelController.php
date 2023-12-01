<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    // Other methods...

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'location' => 'required|string',
            'contact_number' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
            'rooms' => 'required|integer',
            'facilities' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $hotel = Hotel::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'location' => $request->input('location'),
            'contact_number' => $request->input('contact_number'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
            'rooms' => $request->input('rooms'),
            'facilities' => $request->input('facilities'),
            'images' => [], // Initialize with an empty array
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('hotel_images', 'public');
                $hotel->images[] = asset("storage/{$path}");
            }
            $hotel->save();
        }

        return redirect()->route('hotels.index')->with('success', 'Hotel created successfully.');
    }

    // Other methods...
}
