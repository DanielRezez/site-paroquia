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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'pages.home');
Route::view('/sobre', 'pages.sobre');
Route::view('/horarios', 'pages.horarios');
Route::view('/eventos', 'pages.eventos');
Route::view('/padroeiro', 'pages.padroeiro');
Route::view('/contato', 'pages.contato');

