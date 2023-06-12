<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' =>  'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        // $request->session()->flash('success', 'Account has been created! Please Login!');

        return redirect('/login')->with('success', 'Account has been created! Please Login!');
    }
}
