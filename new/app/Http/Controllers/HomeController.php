<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowHome() {
        $NewsHeadline = "BD Won";
        return view('Home',['NewsHeadlineKey'=>$NewsHeadline]);
    }
}
