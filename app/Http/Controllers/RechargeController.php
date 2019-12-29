<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class RechargeController extends Controller
{
    public function create($key, $sort)
    {
        $types = Type::orderBy($key, $sort)->get();
        return view('recharge')
            ->with('types', $types);
    }
}
