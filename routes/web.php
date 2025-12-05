<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PackController;

Route::get('/', function () {
    return view('index');
});

// Services : toutes les routes CRUD
//Route::resource('services', ServiceController::class);

// Packs : index et show accessibles à tous
Route::resource('packs', PackController::class)->only(['index', 'show']);
Route::view('/mentions', 'mentions.mentions')->name('mentions');
Route::view('/privacy', 'mentions.privacy')->name('privacy');
Route::view('/cookies', 'mentions.cookies')->name('cookies');


// Packs : CRUD complet réservé aux utilisateurs connectés
//Route::middleware(['auth'])->group(function () {
//    Route::resource('packs', PackController::class)->except(['index', 'show']);
//});
