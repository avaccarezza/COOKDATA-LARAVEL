<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

//Ruta al /panel
Route::get('/','PanelController@index')->name('panel');
//Ruta de recurso (abarca todas las tradicionales)
Route::resource('consultants_list','ConsultantListController');
Route::resource('consultants','ConsultantController');
Route::resource('users','UserController');
Route::resource('apps','AppController');

