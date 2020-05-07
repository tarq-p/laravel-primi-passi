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

// Route::get('/', function () {
//     return view('welcome');
// });
//


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/header', function () {
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');

Route::get('/prodotti/{id}', function($id){
    return view('product', compact('id'));
})->name('prodotti.show');

Route::get('admin/prodotti', function () {
    return view('admin');
})->name('admin.prodotti');
