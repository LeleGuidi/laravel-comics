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
}) ->name('comics');

Route::get('card/{id}', function ($id) {
    $contents = config('database.contents');
    $comics = config('database.comics');
    $comic = $comics[$id];

    return view('card', compact('comic', 'contents'));
})->name('card');