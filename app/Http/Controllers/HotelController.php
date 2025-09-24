<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotel;

class HotelController extends Controller
{
    //
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotel', compact('hotels'));
    }
// public function show($id)
// {
//     $hotel = Hotel::findOrFail($id); // ambil hotel sesuai ID
//     return view('hotel.show', compact('hotel'));
// }



}
