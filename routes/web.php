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
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\PageController@index')->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['middleware'=>['auth', 'role:user']], function(){
    Route::get('/dashboard/profile', 'App\Http\Controllers\PageController@profile')->name('dashboard.profile');
});

Route::group(['middleware'=>['auth', 'role:doctor']], function(){
    Route::get('/dashboard/patients', 'App\Http\Controllers\PageController@patients')->name('dashboard.patients');
});

require __DIR__.'/auth.php';