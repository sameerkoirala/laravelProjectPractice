<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $registers = Register::all();

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

        $password = $request->get('password');
        $requestData['password'] = Hash::make($password);

        $path = $request->file('profile');
        $name = $path->getClientOriginalName();
        $path->storeAs('public/images', $name);
        $path = "/images/$name";
        $requestData['profile'] = $path;

        Register::create($requestData);

        return redirect('registers')->with('flash_message', 'Register added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $register = Register::find($id);

        return view('registers.show', compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $register = Register::find($id);

        return view('registers.edit', compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $register = Register::find($id);

        $password = $request->get('password');
        if ($register->password !== $password)
        {
            $requestData['password'] = Hash::make($password);
        }

        if ($request->hasFile('profile'))
        {
            $path = $request->file('profile');
            $name = $path->getClientOriginalName();
            $path->storeAs('public/images', $name);
            $path = "/images/$name";
            $requestData['profile'] = $path;
        }

        $register->update($requestData);

        return redirect('registers')->with('flash_message', 'Register updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Register::destroy($id);

        return redirect('registers')->with('flash_message', 'Register deleted!');
    }
}
