<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\venuesController;
use App\Models\venue;

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

Route::get('/', [venuesController::class, 'Display']);
Route::get ('venues', [venuesController::class,'ShowVenues']);
Route::post('addvenue',[venuesController::class,'AddVenue']);
Route::get('deletevenue/{id}', [venuesController::class,'DeleteVenue']);
Route::get ('editvenue/{id}', [venuesController::class, 'Edit']);
Route::post('updatevenue', [venuesController::class, 'Update']);