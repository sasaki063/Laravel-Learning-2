<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
      return view('login.index');
    }

    public function show()
    {
      return view('signup.show');
    }
}
