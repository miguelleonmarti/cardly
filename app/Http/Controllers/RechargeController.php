<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class RechargeController extends Controller
{
    public function create() {
        $types = Type::all();
        return view('recharge')->with('types', $types);
    }
}
