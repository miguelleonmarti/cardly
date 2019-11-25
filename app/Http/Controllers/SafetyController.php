<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafetyController extends Controller
{
    public function create()
    {
        return view('safety');
    }
}
