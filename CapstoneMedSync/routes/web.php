<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


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


//Route::get('/', function () {return redirect('sign-in');})->middleware('guest');

Route::get('sign-up', [RegisterController::class, 'create'])->name('register');
Route::post('sign-up', [RegisterController::class, 'store']);
Route::get('sign-in', [SessionsController::class, 'create'])->name('login');
Route::post('sign-in', [SessionsController::class, 'store']);
Route::post('verify', [SessionsController::class, 'show']);
Route::post('reset-password', [SessionsController::class, 'update'])->name('password.update');

Route::get('verify', function () {
        return view('sessions.password.verify');
    })->middleware('guest')->name('verify');

Route::get('/reset-password/{token}', function ($token) {
        return view('sessions.password.reset', ['token' => $token]);
    })->middleware('guest')->name('password.reset');



/** All Authenticated Routes will be here */
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

    Route::get('/tables', function () {
		return view('pages.tables');
	})->name('tables');

    Route::get('/user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');

    Route::get('/profile', [ProfileController::class, 'create'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('showprofile');

    Route::post('sign-out', [SessionsController::class, 'destroy'])->name('logout');

});
