<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumController extends Controller
{
    function dashboard()
    {
        return view('premium.dashboard');
    }
}
