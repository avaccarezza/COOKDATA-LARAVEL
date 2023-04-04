<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

//Ruta al /panel
Route::get('/','PanelController@index')->name('panel');
//Ruta de recurso (abarca todas las tradicionales)
Route::resource('customers','CustomerController');
Route::resource('users','UserController');

