<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    //
    public function registerUser(Request $request){

    //1 - FORM VALIDATION
    $this->validate($request, [
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'firstname' => 'required',
        'lastname' => 'required'
    ]);

    User::create([
        'username' => $request->firstname . " ". $request->lastname,
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'password' => Hash::make($request->password),
        'email' => $request->email,
        'userpicture' => 'default.png'

    ]);

    return redirect()->route('login');








}

public function login(){
    return view('login');
}

public function register(){
    return view('register');
}


}


