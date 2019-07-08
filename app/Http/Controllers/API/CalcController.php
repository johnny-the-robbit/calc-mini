<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalcController extends Controller
{
    public function addition($a, $b)
    {
        return $a + $b;
    }
    public function subtract($a, $b)
    {
        return $a - $b;
    }
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    public function division($a, $b)
    {
        if(!$b) return response(['error'=> 'на 0 делить нельзя']);
        return $a / $b;
    }
}
