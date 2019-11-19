<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function create() {
        return view('suggestion');
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Suggestion::create(request(['name', 'email', 'message']));

        return redirect()->to('/');
    }

    public function destroy() {
        // TODO: falta implementarlo
        //Suggestion::destroy($id);
    }
}
