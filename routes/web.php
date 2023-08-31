<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthorController;


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

// Route::get('/last-child', function () {
//     return view('lastchild');
// });

Route::get('/child', [PagesController::class, 'index']);
Route::get('/last-child', [PagesController::class, 'create']);
Route::resource('/author', AuthorController::class);

