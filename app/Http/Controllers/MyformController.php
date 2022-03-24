<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyformController extends Controller
{
    public function showForm()
    {
        return view('myform');
    }

    public function handleSubmit(Request $request)
    {
        $name = $request->input('complete_name');
        return "Hello, " . $name;
    }
}
