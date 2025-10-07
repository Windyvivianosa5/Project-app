<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class IstanaSiakController extends Controller
{
public function index()
    {
        // Ambil semua data dari tabel main
        $mains = Main::all();

        // Pisahkan data berdasarkan kategori
        $todoPosts = Main::where('category', 'todo_post')->get();
        $koleksiPosts = Main::where('category', 'koleksi_post')->get();
        $wisatas = Main::where('category', 'wisata')->get();

        return view('index', compact('todoPosts', 'koleksiPosts', 'wisatas', 'mains'));
    }
}
