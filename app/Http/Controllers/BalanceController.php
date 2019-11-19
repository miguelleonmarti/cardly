<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function create() {
        return view('balance');
    }

    public function show(Request $request) {
        $balance = Card::findOrFail($request->id)->balance;
        // TODO: tratamiento de excepciones
        dd($balance); // mal hecho
    }
}
