<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'home']);
Route::get('dashboard', function () {
	return view('dashboard');
})->name('dashboard');

// contract

Route::get('contract', function () {
	return view('contract/contract');
})->name('contract');

Route::get('contract/searchContract', function () {
	return view('contract/searchContract');
})->name('searchContract');

Route::get('contract/addContract', function () {
	return view('contract/addContract');
})->name('addContract');

Route::get('contract/editContract', function () {
	return view('contract/editContract');
})->name('editContract');

// sales report

Route::get('report', function () {
	return view('report/reportSales');
})->name('report');

Route::get('report/searchReport', function () {
	return view('report/searchReport');
})->name('searchReport');

// order

Route::get('order', function () {
	return view('order/order');
})->name('order');

Route::get('order/searchOrder', function () {
	return view('order/searchOrder');
})->name('searchOrder');