<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/payments', [App\Http\Controllers\Admin\PaymentsController::class, 'actionShowPayments'])->name('payments');
    Route::get('/payments/{email}', [App\Http\Controllers\Admin\PaymentsController::class, 'actionShowPaymentsMore'])->name('payments_more');
});

