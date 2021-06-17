<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page/beranda');
})->name('home');

Route::get('/posts', Posts::class);

Route::get('/infoUKM', function(){
    return view('page/infoUKM');
})->name('infoUKM');

Route::get('/infoFakultas', function(){
    return view('page/infoFakultas');
})->name('infoFakultas');

Route::get('/gallery', function(){
    return view('page/gallery');
})->name('gallery');

Route::get('/contact', function(){
    return view('page/contact');
})->name('contact');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
