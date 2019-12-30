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

    public function createUpdate($id)
    {
        $type = Type::where('id', $id)->first();
        return view('update')->with('type', $type);
    }

    public function destroyUser($id)
    {
        User::destroy($id);
        return redirect()->to('/management');
    }

    public function addType(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required'
        ]);

        Type::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect()->to('/management');
    }

    public function destroyType($id)
    {
        Type::destroy($id);
        return redirect()->to('/management');
    }

    public function updateType($id, Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required'
        ]);

        Type::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect()->to('/management');
    }

    public function destroySuggestion($id)
    {
        Suggestion::destroy($id);
        return redirect()->to('/management');
    }
}
