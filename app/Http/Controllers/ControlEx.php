<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlEx extends Controller
{
    public function submit(Request $request): string
    {
        dd($request -> input());
    }  //
}
