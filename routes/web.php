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


$comics = config('comics');

Route::get('/', function() use ($comics) {

    $data = [
        'comics' => $comics,
        'title' => 'Pagina di fumetti'
    ];

    return view('home', $data);
})->name('home');


Route::get('/comic/{id}', function($id) {
    $comics = collect(config('comics'));
    $comics_selezione = $comics->where('id', $id)->first();

    $data = [
        'comics' => $comics_selezione,
        'title' => 'Pagina di fumetti'
    ];

    return view('comic', $data);
})->name('comic');