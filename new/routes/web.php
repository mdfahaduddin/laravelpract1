<?php

use Illuminate\Support\Facades\Route;


Route::get('/Name/{firstname}/{middlename}/{lastname}','App\Http\Controllers\Democtrl@MyName');