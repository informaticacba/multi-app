<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {  return view('index'); });

Route::post('sesion', 'ViewController@sesion');

Route::get('usu', 'ViewController@usu');

Auth::routes();
