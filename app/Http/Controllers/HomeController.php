<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function login()
    {
        return view('common.login');
    }
    function register()
    {
        return view('common.register');
    }
}
