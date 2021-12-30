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

Route::get('/', [WorkController::class, 'index'])->name('works');

Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customer_create');
Route::post('/customers', [CustomersController::class, 'store'])->name('customer_store');

Route::get('/foils', [FoilController::class, 'index'])->name('foils');
