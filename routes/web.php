<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::get('profile','App\Http\Controllers\ProfileController@index')->name('profile.index');
Route::get('orders_list','App\Http\Controllers\OrderListController@index')->name('orders_list.index');
Route::get('profile/edit','App\Http\Controllers\ProfileController@edit')->name('profile.edit');
Route::put('profile/edit','App\Http\Controllers\ProfileController@update')->name('profile.update');

Route::resource('customers.carts', 'App\Http\Controllers\CustomerCartController')->only(['store' , 'destroy']);

Route::resource('carts', 'App\Http\Controllers\CartController')->only(['index']);

Route::resource('orders', 'App\Http\Controllers\OrderController')
        ->only(['create','store'])
        ->middleware(['verified']);




Route::resource('orders.payments', 'App\Http\Controllers\OrderPaymentController')
        ->only(['create','store'])
        ->middleware(['verified']);

Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
