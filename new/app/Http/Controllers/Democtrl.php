<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Democtrl extends Controller
{
    function MyName($firstname,$middlename,$lastname) {

        return view('DemoView',[ 'fkey'=>$firstname, 'mkey'=>$middlename, 'lkey'=>$lastname ]);
    }
}
