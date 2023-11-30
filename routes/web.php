<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExportDataToExcel;
use App\Http\Controllers\ExportPdfController;




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


Route::controller(AuthController::class)->group(function() {
    Route::get('/registration', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'authentication')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');

});

Route::resource('/cast', CastController::class)->middleware(['auth', 'can:isAdmin']); 
Route::resource('/genre', GenreController::class)->middleware('auth');
Route::resource('/film', FilmController::class)->middleware('auth');

Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('user.profile')->middleware('auth');

Route::get('/film/{id}/peran/create', [PeranController::class, 'create'])->name('peran.create');
Route::post('/film/{id}/peran', [PeranController::class, 'store'])->name('peran.store');

Route::get('/export-pdf/film/{film}', [ExportPdfController::class, 'exportPdfFilm'])->name('exportpdf.film');

Route::get('/export/peran', [ExportDataToExcel::class, 'exportPeran'])->name('peran.export')->middleware(['auth', 'can:isAdmin']);
Route::get('/export/cast', [ExportDataToExcel::class, 'exportCast'])->name('cast.export')->middleware(['auth', 'can:isAdmin']);
