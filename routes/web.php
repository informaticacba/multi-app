<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {  return view('index'); });
Route::get('/home', function () {  return view('index'); });
Route::get('/tabla', function () {  return view('index'); });

Auth::routes();