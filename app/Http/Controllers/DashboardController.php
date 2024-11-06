<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashbooard()
    {
        return view('bakcend.dashboard');
    }
}
