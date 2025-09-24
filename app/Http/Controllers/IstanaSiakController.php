<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\TodoPost;
use App\Models\KoleksiPost;
use Illuminate\Http\Request;

class IstanaSiakController extends Controller
{
 public function index(){
    $todoPosts = TodoPost::all();
    $koleksiPosts = KoleksiPost::all();
    $wisatas = Wisata::all();

    return view('index', compact('todoPosts','koleksiPosts','wisatas'));
 }
}
