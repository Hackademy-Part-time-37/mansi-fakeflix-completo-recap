<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'homepage'])->name('homepage');
Route::get('/lista-film', [FrontController::class, 'list'])->name('list');
Route::get('/dettaglio-film/{uri}', [FrontController::class, 'detail'])->name('detail');

Route::get('/contattaci', [ContactController::class, 'contact'])->name('contact');
Route::post('/invia-segnalazione', [ContactController::class, 'subscribe'])->name('subscribe');
