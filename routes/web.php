<?php

use App\Models\TodoPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TodoPostController;
use App\Http\Controllers\IstanaSiakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[IstanaSiakController::class, 'index']);

Route::get('/hotel', [HotelController::class, 'index'])->name('index');
Route::get('/tentang', function () {return view('tentang'); })->name('tentang');
Route::get('/kontak', function () {return view('kontak'); })->name('kontak');
Route::get('/detailHotel/{id}', [HotelController::class, 'show'])->name('detailHotel');

Route::get('/storage-link', function () {
    // Run artisan command
    Artisan::call('storage:link');

    return response()->json([
        'message' => 'Storage link created successfully.',
        'output'  => Artisan::output(),
    ]);
})->name('storage.link');


// Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
// Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
// Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
// Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
// Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
// Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
