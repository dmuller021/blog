<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;

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
    return view('index');
});

Route::resource('/blogs', BlogController::class);

Route::get('login', [LoginController::class, 'login']);

Route::get('registration', [LoginController::class, 'registration']);
//Route::post('save', function() {
//    return view('auth.save');
//});

Route::post('create', [LoginController::class, 'create'])->name('auth.create');

Route::get('contact', function() {
    return view('contact');
});

Route::resource('test', BlogController::class);

//Posts endpoint
Route::get('/posts', [PostsController::class, 'index']);

