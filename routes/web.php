<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

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

Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::post('/customers', [CustomerController::class, 'store'])->name('customer_store');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customer_create');


Route::get('/foils', [FoilController::class, 'index'])->name('foils');
Route::post('/foils', [FoilController::class, 'store'])->name('foil_store');
Route::get('/foils/create', [FoilController::class, 'create'])->name('foil_create');


Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::post('/orders', [OrderController::class, 'store'])->name('order.store');
Route::delete('orders/{order_id}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::get('/orders/create', [OrderController::class, 'create'])->name('order.create');
Route::get('/order/edit/{order_id}', [OrderController::class, 'show'])->name('order.show');
Route::post('/order/edit/{order_id}', [OrderController::class, 'edit'])->name('order.edit');






// Route::get('/orders/{order_id}', [OrderController::class, 'show'])->name('orderWorks');

Route::get('/works/create/{order_id}', [WorkController::class, 'create'])->name('work.create');
Route::post('/works', [WorkController::class, 'store'])->name('work.store');