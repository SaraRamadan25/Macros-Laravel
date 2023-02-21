<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    dd(\Illuminate\Support\Str::partNumber(23242));
    dd(\Illuminate\Support\Str::prefix(23242,'ABCD-'));


    return \Illuminate\Support\Facades\Response::errorJson();
    return view('welcome');
});
