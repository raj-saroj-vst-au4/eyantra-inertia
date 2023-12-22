<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/countries', [CollegeController::class, 'getCountries']);
Route::get('/states/{country}', [CollegeController::class, 'getStatesByCountry']);
Route::get('/colleges/{country}/{state}', [CollegeController::class, 'getCollegesByState']);
