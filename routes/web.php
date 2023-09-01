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
    return view('welcome');
});

// Route::get('othman/{id}', function ($id) {
//     return "othman".$id;
// });

Route::get('othman/{id?}', function ($id = null) {
    return "othman".$id;
});

Route::get('news/{num?}' , function($num = null){
    if($num == null){
        return "all news";
    };
    return "news number => ".$num ; 
});