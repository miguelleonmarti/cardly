<?php

namespace App\Http\Controllers;

use App\Card;
use App\Suggestion;
use App\Type;
use App\User;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $users = User::where('email', '!=', 'admin@admin.com')->get();
        $types = Type::all();
        $suggestions = Suggestion::all();
        return view('management')
            ->with('users', $users)
            ->with('types', $types)
            ->with('suggestions', $suggestions);
    }

    public function destroyUser($id) {
        User::destroy($id);
        return redirect()->to('/management');
    }

    public function destroyType($id) {
        Type::destroy($id);
        return redirect()->to('/management');
    }

    public function destroySuggestion($id) {
        Suggestion::destroy($id);
        return redirect()->to('/management');
    }

}
