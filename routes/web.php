<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('database.comics');
    $contents = config('database.contents');


    return view('comics', compact('comics', 'contents'));
});

Route::get('/card', function () {
    $comics = config('database.comics');
    
    return view('card', compact('comics'));
});