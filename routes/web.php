<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
//use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('beranda');
});*/
Route::get('/', 'App\Http\Controllers\PostController@keberanda');

/*Route::get('/galeri', function () {
    return view('galeri', ['galeri' => 'GaleriController@pict']);
});*/

Route::view('/profil', 'profil');
//Route::view('/galeri', 'galeri');
Route::view('/program', 'program');
//Route::view('/contact', 'contact_us');
Route::get('/galeri', 'App\Http\Controllers\GaleriController@kegaleri');

Route::resource('posts', PostController::class);
//Route::get('/posts', [PostController::class, 'index']);

Route::resource('galeris', GaleriController::class);

Route::get('/contact', 'App\Http\Controllers\Contact@showContactForm');
Route::post('/contact', 'App\Http\Controllers\Contact@sendMail');


//Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    //Route::get('beranda', [HomeController::class, 'index'])->name('beranda');
    Route::get('beranda', [PostController::class, 'keberanda'])->name('beranda');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});