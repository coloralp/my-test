<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        dd(str('nurullahdemirel75@gmail.com')->afterLast("@")->toString());
    }
}
