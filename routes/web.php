<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () { return view('welcome'); })->name('home');

Route::get('contact', function () { return view('contact'); })->name('contact');
Route::post('contact', [ContactController::class, 'send'])->name('contact-send');
Route::get('thanks', function () { return view('contact-thanks'); })->name('contact-thanks');

Route::prefix('projects')->group(function () {
    Route::get('/', function () { return view('projects'); })->name('projects');
    Route::get('/{name}', [ProjectController::class, 'view'])->name('projects-view');
});

Route::prefix('blog')->group(function () {
    Route::get('/', function () { return view('blog'); })->name('blog');
    Route::get('/{name}', [BlogController::class, 'view'])->name('blog-view');
});

Route::get('about', function () { return view('about'); })->name('about');
