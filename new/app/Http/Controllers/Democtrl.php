<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Democtrl extends Controller
{
    function MyName($namevalue) {
        return $namevalue;
    }
}
