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

Route::get('/users',function(){
    return view('users');
});

Route::post('/confirm','TblUserController@store');
Route::get('/check','TblUserController@check');


Route::get('/users', [TblUserController::class, 'index'])->name('users.index');
