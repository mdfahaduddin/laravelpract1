<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleCtrl extends Controller
{
    public function __invoke(){
        return "From single action controller";
    }
}
