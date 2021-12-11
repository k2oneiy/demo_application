<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/details', 'StudentController@display');  


// Route::get('/hi',function()
// {
//     return 'cbjcjb';
// });

// Route::get('/about',function(){
//     return view('about');
// });


// Route::get('/users/{id}',function($id){
//     return "user id is :".$id;
// });

// Route::get('/contact', function(){  
//     return view('Contact',['name'=>'John']);  
// });  


// Route::get('/post','StudentController@display');  

Route::get('/post','PostsController@display');  