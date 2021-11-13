<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

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
    return view('auth.login');
});

Route::get('/main',[\App\Http\Controllers\HomeController::class, 'index']) ;
Route::get('/profile/{user_id}',[HomeController::class, 'profile'])->name('profile') ;
Route::get('/search',[HomeController::class, 'search'])->name('search');
Route::get('/viewuser/{user_id}',[HomeController::class, 'viewuser'])->name('viewuser');
Route::get('/search-user',[HomeController::class, 'search_user'])->name('search_user');

Route::post('/handle-friends',[UsersController::class, 'handleFriend'])->name('handleFriend');
Route::post('/profile/update',[UsersController::class, 'update'])->name('profile_update');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

