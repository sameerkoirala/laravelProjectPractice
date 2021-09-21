<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
use TheSeer\Tokenizer\Exception;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $demos = Demo::all();
        $demos = Demo::latest()->get();
        return view('demo.index', compact('demos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $name = $request->input('name1');
//        $password = $request->input('password1');
//        Demo::create(['name' => $name, 'password' => $password]);
        date_default_timezone_set('Asia/Kathmandu');
        Demo::create($request->all());
        return redirect('/demos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demo = Demo::find($id);
        return view('demo.show', compact('demo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demo = Demo::find($id);
        return view('demo.edit', compact('demo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $demo = Demo::find($id);
        $requestInput = $request->all();
        $demo->update($requestInput);
        return redirect('/demos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demo = Demo::find($id);
        $demo->delete();
        return redirect('/demos');
    }

    public function self()
    {
        echo 'This is self';
    }
}
