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
        return view('createPost');
        //should have form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //storing User array into User database table and assigning it to the variable 'user'
        $meme = memes::firstOrCreate([
            'name' => $request->input('name'),
            'genre' => $request->input('genre'),
            'joke' => $request->input('joke')
        ]);
        //returns the user.blade.php view and passes it the 'user' variable with the target id
        return redirect('/home');
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

        // dd(memes::where('genre', 'Tech'));
        
        return view('tech', [
           
            'tech' => memes::whereIn('genre', ['tech'])->get(),
        ]);
    }
    public function show_bio()
    {
        return view('bio', [
           
            'bio' => memes::whereIn('genre', ['biology'])->get(),
        ]);
    }
    public function show_business()
    {
        return view('business', [
           
            'business' => memes::whereIn('genre', ['business'])->get(),
        ]);
    }

    public function show_other()
    {
        return view('other', [
           
            'other' => memes::whereIn('genre', ['Other'])->get(),
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
