<?php

use Illuminate\Support\Facades\Route;
use App\Mail\HablemosMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::get('profile','App\Http\Controllers\ProfileController@index')->name('profile.index');
Route::get('profile/edit','App\Http\Controllers\ProfileController@edit')->name('profile.edit');
Route::put('profile/edit','App\Http\Controllers\ProfileController@update')->name('profile.update');


Route::resource('/customers_area', 'App\Http\Controllers\CustomerAreaController');

Route::get('partners_section','App\Http\Controllers\PartnerSectionController@index')->name('partners_section.index');


Route::resource('politics', 'App\Http\Controllers\PoliticController')->only(['index']);
Route::resource('terms', 'App\Http\Controllers\TermController')->only(['index']);

Route::get('hablemos', [App\Http\Controllers\EmailController::class, 'index'])->name('hablemos.index');

Route::post('hablemos', [App\Http\Controllers\EmailController::class, 'store'])->name('hablemos.store');



Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
