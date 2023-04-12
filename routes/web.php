<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\abouttController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Promise\Create;

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

Route::resource('/products', ProductController::class);

Route::resource('/gallery', galleryController::class);
Route::resource('/albums', AlbumController::class);
// Route::get('/albums', [AlbumController::class,"index"])->name("albums.index");
// Route::get('/albums/create', [AlbumController::class, 'create'])->name("albums.create");
// Route::post('/albums', [AlbumController::class, 'store'])->name("albums.store");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'index'])->name("contact");

Route::get('/about', [abouttController::class, 'index'])->name("about");

