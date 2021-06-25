<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $flight = User::all();
        return view('user', ['data' => $flight] );
    }

    public function regist(){

        return view('register');
    }

    public function addUser(){

        $request = Request::all();


        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect(route('user'));
        
    }

    public function delete(){
        $request = Request::all();
        $users = User::find($request['id']);
        $users->delete();

        return redirect(route('user'));
    }

}

