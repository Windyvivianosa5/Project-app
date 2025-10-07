<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    //
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotel', compact('hotels'));
    }
    public function show($id)
{
    $hotel = Hotel::findOrFail($id);

    $nearbyHotels = Hotel::where('id','!=', $hotel->id)->limit(4)->get();

    return view('detailHotel', compact('hotel', 'nearbyHotels'));
}


}
