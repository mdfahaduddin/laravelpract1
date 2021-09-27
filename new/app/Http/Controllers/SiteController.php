<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home(){
        return "Home function";
    }

    function About(){
        return "About function";
    }

    function Contact(){
        return "Contact function";
    }

    function Service(){
        return "Service function";
    }
}
