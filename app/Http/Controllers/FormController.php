<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create() {
        return view('form');
    }

    public function sum(Request $request)
    {
        $first = $request->first;
        $second = $request->second;
        return view('example', compact('first', 'second'));
    }
}
