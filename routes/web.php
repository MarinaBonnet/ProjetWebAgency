<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'home'])->name('home');



// Services : toutes les routes CRUD
//Route::resource('services', ServiceController::class);

// Packs : index et show accessibles à tous
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::resource('packs', PackController::class)->only(['index', 'show']);
Route::view('/mentions', 'mentions.mentions')->name('mentions');
Route::view('/privacy', 'mentions.privacy')->name('privacy');
Route::view('/cookies', 'mentions.cookies')->name('cookies');


// Packs : CRUD complet réservé aux utilisateurs connectés
//Route::middleware(['auth'])->group(function () {
//    Route::resource('packs', PackController::class)->except(['index', 'show']);
//});
