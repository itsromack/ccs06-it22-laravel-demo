<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionController extends Controller
{
    public function getSum($a, $b)
    {
        return $a + $b;
    }
}
