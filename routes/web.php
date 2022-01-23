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
// route for outbreakmap index
Route::get('/outbreakmap', 'App\Http\Controllers\OutbreakMapController@index')->name('outbreakmap.index');
// route for creating new outbreak
Route::get('/outbreaks/create', 'App\Http\Controllers\OutbreakController@create')->name('outbreaks.create');
// resource route for outbreaks
Route::resource('/outbreaks', 'App\Http\Controllers\OutbreakController');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['middleware'=>['auth', 'role:user']], function(){
    Route::get('/dashboard/profile', 'App\Http\Controllers\PageController@profile')->name('dashboard.profile');

    //route resource for personals
    Route::resource('/personals', 'App\Http\Controllers\PersonalController');
    Route::resource('/meds', 'App\Http\Controllers\MedController');
    // Route::post('/personal', 'App\Http\Controllers\MedController@store')->name('meds.store');
});

Route::group(['middleware'=>['auth', 'role:doctor']], function(){
    Route::get('/dashboard/patients', 'App\Http\Controllers\PageController@patients')->name('dashboard.patients');
});

require __DIR__.'/auth.php';