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


#Route::get('test/{nombre}', function ($nombre) {
#    return "hola {$nombre}";
#});

// Route::get('test/{nombre}', function ($nombre) {
//     return view('ejemplo', compact('nombre'));
// });


//Route::view('test', 'ejemplo', compact('nombre'));

Route::view('/','welcome')->name('home');

Route::get('/about', 'AboutController')->name('about');

Route::view('/blog','blog')->name('blog');

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', 'FormController@store');