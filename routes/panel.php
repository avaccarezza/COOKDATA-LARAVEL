<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

//Ruta al /panel
Route::get('/','PanelController@index')->name('panel');
//Ruta de recurso (abarca todas las tradicionales)
Route::resource('customers','CustomerController');
Route::resource('consultants_list','ConsultantListController');
Route::resource('consultants','ConsultantController');
Route::resource('apps','AppController');

Route::delete('/users/{userId}/customers/{customerId}/remove', [App\Http\Controllers\Panel\ConsultantListController::class, 'removeCustomer'])->name('users.customers.remove');


Route::resource('users','UserController');

