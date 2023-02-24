<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $title = 'Portal Login';
        return view('pages.login', compact('title'));
    }
}
