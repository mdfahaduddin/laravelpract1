<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowHome() {
        $CountryData = array("BD","PAK","USA","SAUDI","UK");

        $LoginStatus = false;

        return view('Home',['CountryDataKey'=>$CountryData,'LoginStatusKey'=>$LoginStatus]);
    }
}
