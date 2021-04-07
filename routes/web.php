<?php

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

#region band
Route::get('/', [\App\Http\Controllers\BandController::class, 'index'])->name('band.index');
Route::get('/band/{id}', [\App\Http\Controllers\BandController::class, 'band'])->name('band.band');
#endregion

#region auth
Route::middleware('auth')->group(function() {

    #region user
    Route::get('/user/dashboard', [\App\Http\Controllers\UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/dashboard/bands', [\App\Http\Controllers\UserController::class, 'bands'])->name('user.bands');
    #endregion

    #region band
    Route::get('/band/create', [\App\Http\Controllers\BandController::class, 'create'])->name('band.create');
    #endregion

    #region embed

    #endregion

});
Auth::routes();
#endregion
