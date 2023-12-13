<?php

use Illuminate\Support\Facades\Route;
use App\Controller\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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

//route resource
Route::resource('/post', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Word';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/siswa/rpl/abella', function () {
    echo '<h2 style="text-align: center"><u>Welcome to Laravel, Abella</u></h2>';
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/data_guru', function () {
    return view('data_guru');
});

Route::get('/data_siswa', function () {
    return view('data_siswa');
});


Route::get('/product', [PostController::class, 'product']);
Route::get('/home', [PostController::class, 'home']);

Route::get('/about', [PostController::class, 'about']);
Route::get('/client', [PostController::class, 'client']);
Route::get('/contact', [PostController::class, 'contact']);
Route::get('/riview', [PostController::class, 'riview']);
Route::get('/tampil', [PostController::class, 'tampil']);
Route::get('/tampil/search', [PostController::class, 'search']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home1', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
