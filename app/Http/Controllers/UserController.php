<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function saludo($username){
        return view('saludo', ['username' => $username]);
    }
}
