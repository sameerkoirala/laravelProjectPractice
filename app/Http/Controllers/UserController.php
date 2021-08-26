<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        return view('register');
    }

    public function store(Request $request)
    {
//        echo json_encode($request->input());
//
        if ($request->has('username'))
        {
            $fullName = $request->input('full-name');
            $username = $request->input('username');
            $email = $request->input('email');
            $contact = $request->input('contact');
            $password = $request->input('password');
            $path = $request->file('profile');
            $path->storeAs('public/images', 'abc.jpeg');
            $path = '/images/abc.jpeg';
            return view('dashboard', compact('fullName', 'username', 'email', 'contact', 'password', 'path'));
        }
    }
}
