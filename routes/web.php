<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CastController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
})->name('form');

// Route::get('/child', function () {
//     return view('child');
// });

Route::get('/template', function () {
    return view('template.master');
});

Route::get('/child', [PagesController::class, 'index']);
Route::resource('/author', AuthorController::class);
Route::resource('/cast', CastController::class);

