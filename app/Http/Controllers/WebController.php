<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index()
    {
        $title = 'Portal Login';
        return view('pages.login', compact('title'));
    }

    public function handle_login(Request $request)
    {
        $credential = $this->validate(
            $request,
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Username tidak boleh kosong.',
                'password.required' => 'Password tidak boleh kosong'
            ]
        );

        if (Auth::attempt($credential)) {
            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }
}
