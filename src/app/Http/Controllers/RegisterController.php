<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function login(Request $request)
    {
        return view('login');
    }

    public function admin(Request $request)
    {
        return view('admin');
    }
}
