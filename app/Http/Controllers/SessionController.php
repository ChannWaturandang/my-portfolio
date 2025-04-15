<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login_form () {
        return view('session.index');
    }

    public function login (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                'max:12',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{1,12}$/'
            ],
        ], [
            'password.regex' => 'Password harus mengandung 1 huruf besar, 1 huruf kecil, dan 1 simbol.',
            'password.max' => 'Password maksimal 8 karakter.',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            return redirect()->route('admin')->with('success', 'Login Success🚀');
        } else {
            return redirect('login')->with('failed' , "The account is not found.");
        }
    }

    function logout () {
        Auth::logout();
        return redirect('login')->with('success' , 'You have been logged out.');
    }

}
