<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMMEController extends Controller
{
    public function dashboard()
    {
        return view('smme.dashboard');
    }
}
