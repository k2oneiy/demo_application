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
//     // return view('welcome');
//     return "i love k2";
// });


Route::get('/', function () {
    return "laravel";
    
});


// Route::get('/user/{id}', function ($id) {
//     // return view('welcome');
//     // return "i love k2";
//     return "user id is :". $id;

// });

Route::get('home','App\Http\Controllers\PagesController@index');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
