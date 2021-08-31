<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

            //insert record in database
            DB::table('registers')->insert([
                'id' => 11,
                'full_name' => $fullName,
                'username' => $username,
                'email' => $email,
                'contact' => $contact,
                'password' => $password,
                'profile' => $path,
                'created_at' => '2021-08-31',
                'updated_at' => '2021-08-31'
            ]);
            return view('dashboard', compact('fullName', 'username', 'email', 'contact', 'password', 'path'));
        }
    }

    public function index()
    {

        //All Users
        $users = DB::table('registers')->get();
        return view('users', compact('users'));

        //Single User
        $user = DB::table('registers')->where('username','sameer')->get();

        //Value for columns
        $user = DB::table('registers')->where('username','sameer')->value('full_name');

        //Find id
        $user = DB::table('registers')->find(5);

        //Pluck username
        $user = DB::table('registers')->pluck('id');

        //Pluck key value
        $user = DB::table('registers')->pluck('username', 'id');

        //limit
//        $users = DB::table('registers')->skip(2)->take(5)->get();

//        echo json_encode($users);

    }
}
