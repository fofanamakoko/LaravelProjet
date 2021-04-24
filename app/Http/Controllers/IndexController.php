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
   /* $this->validate($request, [
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

    return redirect()->route('login');*/

    $user = new User;
    $user->username=$request->firstname." ".$request->lastname;
    $user->firstname=$request->firstname;
    $user->usertype=$request->usertype;
    $user->lastname=$request->lastname;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->save();
return redirect('/');



// a  enlever

   // auth()->attempt( $request->only('email', 'password') );
   // return redirect()->route('registered');



}

public function login(){
    return view('login');
}

public function register(){
    return view('register');
}
public function Adminlogin(){
    return view('Adminlogin');
}


}
