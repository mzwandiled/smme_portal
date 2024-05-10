<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Corporate_SponsorController extends Controller
{
    public function dashboard()
    {
        return view('corporate_sponsor.dashboard');
    }
}
