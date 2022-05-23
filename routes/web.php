<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravellogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ChangePasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('Travellog', TravellogController::class);
    Route::resource('Dashboard', DashboardController::class);
    Route::resource('Profile', ProfileController::class);
    Route::resource('Album', AlbumController::class);

    Route::post('Checkout/{id}', 'App\Http\Controllers\TravellogController@update_checkout')->name('Travellog.checkout');

    Route::post('/change-avatar', 'App\Http\Controllers\ProfileController@changeAvatar')->name('Profile.changeAvatar');

    Route::get('change-password', [ChangePasswordController::class, 'index']);
    Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');
});



require __DIR__ . '/auth.php';
