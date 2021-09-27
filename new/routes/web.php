<?php

use Illuminate\Support\Facades\Route;


Route::get('/Name/{firstname}/{middlename}/{lastname}','App\Http\Controllers\Democtrl@MyName');

Route::group(['prefix'=>'account'],function(){

Route::get('/profile', function(){
    return "Profile";
});
Route::get('/login', function(){
    return "Login";
});
Route::get('/signup', function(){
    return "Signup";
});
Route::get('/updateprofile', function(){
    return "Update Profile";
});

});

Route::get('/', 'App\Http\Controllers\SingleCtrl');

