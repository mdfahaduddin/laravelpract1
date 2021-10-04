<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCtrl extends Controller
{
    function MySelf() {
        return "From Cuctom controller";
    }

    function YourSelf() {
        return "From Cuctom controller2";
    }
}
