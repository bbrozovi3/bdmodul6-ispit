<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller 
{

    public function index() {
        return view('register');
    }

    public function register(Request $request) {

        $request->validate([

            'username' => 'required|unique:users|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $user = User::create([
            'username' => trim($request->input('username')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password'))
        ]);

        if($user) {
            return redirect()->route('login');
        } else {
            return redirect()->back()->withErrors(['msg' => 'Registration failed!']);
        }
    }



}

?>