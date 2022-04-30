<?php

namespace App\Http\Controllers;

use App\Models\memes;
use Illuminate\Http\Request;

class MemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function show_all()
    {
        return view('home', [
            // when home view is rendered, display all memes
            'memes' => memes::all(),
        ]);
    }

    public function show_tech()
    {
        return view('home', [
            // when home view is rendered, display all memes
            'memes' => memes::all(),
        ]);
    }
    public function show_bio()
    {
        return view('home', [
            // when home view is rendered, display all memes
            'memes' => memes::all(),
        ]);
    }
    public function show_business()
    {
        return view('home', [
            // when home view is rendered, display all memes
            'memes' => memes::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
