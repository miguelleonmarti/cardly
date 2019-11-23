<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BalanceController extends Controller
{
    public function create()
    {
        return view('balance');
    }

    public function show(Request $request)
    {
        $id = $request->input('id');

        $this->validate(request(), [
            'id' => 'exists:cards,id'
        ]);

        $balance = Card::findOrFail($id)->balance;
        return view('balance')
            ->with('balance', $balance)
            ->with('id', $id);
    }
}
