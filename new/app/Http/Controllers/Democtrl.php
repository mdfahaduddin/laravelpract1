<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Democtrl extends Controller
{
    function MyName($firstname,$middlename,$lastname) {

        
        return "First Name:" . $firstname . "</br>Middle Name:" . $middlename . "</br>Last Name:" . $lastname;
    }
}
