<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Register;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 25;

        $registers = Register::latest()->paginate($perPage);

        return view('registers.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('registers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'bail|required',
            'username' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
            'profile' => 'required'
        ]);

        $requestData = $request->all();
        $path = $request->file('profile');
        $path->storeAs('public/images', 'abc.jpeg');
        $path = '/images/abc.jpeg';
        $requestData['profile'] = $path;
        Register::create($requestData);

        return redirect('registers')->with('flash_message', 'Register added!');
    }
}
