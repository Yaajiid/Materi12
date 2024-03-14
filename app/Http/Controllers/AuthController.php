<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        return view('welcome1', compact('firstname', 'lastname'));
    }
}

