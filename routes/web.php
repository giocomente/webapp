<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;

use App\Http\Controllers\WorkController;

use App\Http\Controllers\FoilController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WorkController::class, 'index']);
Route::get('/customers', [CustomersController::class, 'index']);
Route::get('/foils', [FoilController::class, 'index']);
