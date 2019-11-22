<?php

namespace App\Http\Controllers;

use App\Card;
use App\Type;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function create()
    {
        $cards = Card::where('user_id', '=', auth()->user()->getAuthIdentifier())->get();
        return view('cards')->with('cards', $cards);
    }
}
