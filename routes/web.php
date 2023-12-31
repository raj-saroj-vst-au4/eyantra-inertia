<?php

use App\Http\Controllers\InertiaRouteController;
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

Route::get('/', [InertiaRouteController::class, 'home'])->name('home');

Route::middleware(['isAuth'])->group(function () {
    Route::get('/signup', [InertiaRouteController::class, 'signup'])->name('signup');
});
