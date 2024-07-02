<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GenerativeAiController;
use App\Http\Controllers\NasaImagesApiController;
use App\Http\Controllers\NasaPodController;
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

Route::get('/clear', function () {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');
   return "<h1>Cache cleared successfully</h1>";
});

Route::get('/key', function () {
   Artisan::call('key:generate');

   return "<h1>Key generated successfully</h1>";
});

Route::get('/openai', [GenerativeAiController::class, 'showForm'])->name('openai.form');
Route::post('/openai', [GenerativeAiController::class, 'generateChat'])->name('openai.chat');

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

/*
| CoinApi Route
*/

Route::get('/coinapi', [App\Http\Controllers\CoinApiController::class,'coinapi']);

/*
| NASA IMAGES API Route
*/
Route::get('/nasa-images-api', [NasaImagesApiController::class, 'nasaimagesapi'])->name('nasaimages.search');
Route::get('/fetch-video-data', [NasaImagesApiController::class, 'fetchVideoData'])->name('fetch.video.data');

/*
| NASA POD API Route
*/
Route::get('/nasa-pod', [NasaPodController::class, 'index'])->name('nasa-pod.index');
Route::get('/nasa-pod/previous', [NasaPodController::class, 'previousDate'])->name('nasa-pod.previousDate');
Route::get('/nasa-pod/next', [NasaPodController::class, 'nextDate'])->name('nasa-pod.nextDate');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

