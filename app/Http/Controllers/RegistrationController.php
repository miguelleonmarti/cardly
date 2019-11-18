<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required_with:password_confirmation|same:password_confirmation',
            'birthday' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password', 'birtday']));

        auth()->login($user);

        return redirect()->to('/login');
    }
}
