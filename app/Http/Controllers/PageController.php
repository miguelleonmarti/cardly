<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function launchIndexView() {
        return view('index');
    }

    public function launchLoginView() {
        return view('login');
    }

    public function launchRegisterView() {
        return view('register');
    }
}
