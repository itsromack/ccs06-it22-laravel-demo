<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet($name = 'Angeles')
    {
        return view('greet', ['name' => $name]);
    }
}
