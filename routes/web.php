<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'accueil'])->name('main.accueil');

Route::get('/cours', [MainController::class, 'cours'])->name('main.cours');


Route::get('/tarifs', [MainController::class, 'tarifs'])->name('main.tarifs');


Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');


Route::get('/mentions-legales', [MainController::class, 'mentions-legales'])->name('main.mentions-legales');

