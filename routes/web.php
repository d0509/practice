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
    return view('welcome');
});


Route::any('/demo/{name?}',function($name = null){
   $data = compact('name');
   return view('welcome')->with($data);
})->middleware('guard');


Route::get('no-access',function(){
    echo 'You are not allowed to access the page';
    die;
});