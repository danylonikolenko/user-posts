<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
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


Route::prefix('/user')->group(function () {
    Route::get('get', [UserController::class, 'getUser']);
    Route::post('edit', [UserController::class, 'edit']);
});

Route::prefix('/article')->group(function () {
    Route::delete('delete', [ArticleController::class, 'delete'])->name("delete_article");
    Route::post('add', [ArticleController::class, 'store'])->name('add_article');
    Route::post('update', [ArticleController::class, 'edit'])->name('update_article');
});

Route::get('register', [RegisterController::class, 'register']);

Route::post('register',  [RegisterController::class, 'store'])->name('register');

Route::get('login', [LoginController::class, 'login'])->name('login');

Route::post('login', [LoginController::class, 'authenticate'])->middleware('throttle:10,1');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('home', [ArticleController::class, 'index'])->middleware('auth')->name('home');
Route::get('/', [ArticleController::class, 'index'])->middleware('auth')->name('home');

