<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    //sign in 
    function signin(){
     return view("components.auth.signin");
    }


    //signUP 
    function signup(){
        return view("components.auth.signup");
    }
}
