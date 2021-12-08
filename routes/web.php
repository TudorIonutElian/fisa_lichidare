<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Route::get('/users/index', [HomeController::class, 'users'])->name('users.index');
Route::get('/users/create', [HomeController::class, 'users'])->name('user.create');
Route::get('/users/edit', [HomeController::class, 'users'])->name('user.edit');
Route::get('/users/destroy', [HomeController::class, 'users'])->name('user.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
