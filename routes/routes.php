<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your library. These
| routes are loaded by the RouteServiceProvider .
| Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
