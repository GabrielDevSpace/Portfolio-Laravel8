<?php

use Illuminate\Support\Facades\Route;

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
    return view('site.sobre');
})->name('site.sobre');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.sobre');

Route::get('/experiencia', function () {
    return view('site.experiencia');
})->name('site.experiencia');

Route::get('/portfolio', function () {
    return view('site.portfolio');
})->name('site.portfolio');

Route::get('/contato', function () {
    return view('site.contato');
})->name('site.contato');

Route::get('/projetos', function () {
    return view('site.projetos');
})->name('site.projetos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
