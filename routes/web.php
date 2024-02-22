<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Login');
});

Route::get('/signup',function(){
    return view('register');
});

Route::get('/recovery',function(){
    return view('recovery');
});

Route::post('/confirm','TblUserController@store');


// Route::get('/users', [TblUserController::class, 'index'])->name('users.index');
Route::get('/users','TblUserController@index');
Route::get('/users/${id}','TblUserController@show');