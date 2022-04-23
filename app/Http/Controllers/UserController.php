<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        return view('registerUI');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //function will be hit when there is a post. For example when a form is submitted, it will do a post and execute this function.
    public function store(Request $request)
    {
        
        //storing User array into User database table and assigning it to the variable 'user'
        $user = User::firstOrCreate([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'email_verified_at' => now(),
            'password' => $request->input('password'), // password
            'remember_token' => $request->input('_token'),
        ]);
        //returns the user.blade.php view and passes it the 'user' variable with the target id
        return redirect('/home');
    }

    //login user with credentials
    public function login()
    {
        //storing User array into User database table and assigning it to the variable 'user'
        // $user = 

        return view("/loginUI");
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('registerUI', [
            // finds a user where the ID is "something" from the User model and stores it in the variable user to later be called by a view to be displayed. ID parameter of 1 is received when user enters route as localhost/user/1
            'user' => User::find($id),
        ]);
    }

    public function show_all()
    {
        return view('welcome', [
            // when welcome view is rendered, display all users
            'users' => User::all(),
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
