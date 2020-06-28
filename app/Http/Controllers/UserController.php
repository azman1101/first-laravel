<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    /*
    public function __construct(){
        $this->middleware('auth');
    }
    */
    
    public function home(){
        return view('home');
        // home refers to home.blade.php 
    }

    public function showUsers(){
        $users = User::get();
        
        return view('users', compact('users'));
        // home refers to home.blade.php 
    }

    public function createUser(){
        return view('createuser');
    }

    public function saveUser(CreateUser $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back()->with('success', 'Sign up successful');
    }
}
