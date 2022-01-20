<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;

use App\Http\Controllers\WorkController;

use App\Http\Controllers\FoilController;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\OrderWorksController;

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
Route::get('/foils/create', [FoilController::class, 'create'])->name('foil_create');
Route::post('/foils', [FoilController::class, 'store'])->name('foil_store');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::post('/orders', [OrderController::class, 'store'])->name('order_store');
Route::get('/orders/create', [OrderController::class, 'create'])->name('order_create');

// Route::get('/orders/{order_id}', [OrderController::class, 'show'])->name('orderWorks');

Route::get('/works/create/{order_id}', [WorkController::class, 'create'])->name('work_create');
Route::post('/works', [WorkController::class, 'store'])->name('work_store');