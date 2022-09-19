<?php

use Illuminate\Support\Facades\Route;

/* SITE */

Route::get('/', function () {
    return view('welcome')->name('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
