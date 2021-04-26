<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;



class IndexController extends Controller
{
    //
    public function registerUser(Request $request){

        $validated = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3'

        ]);


    $user = new User;
    $user->username=$request->firstname." ".$request->lastname;
    $user->firstname=$request->firstname;
    $user->usertype=$request->usertype;
    $user->lastname=$request->lastname;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->save();

    return redirect('/registered')->with('status','User add success');




}

//------------------------------------------------------


public function checklogin(Request $request){


     $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:3'

    ]);

     $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password')
    );

       if(Auth::attempt($user_data))
       {
        return redirect('home');
       }
       else
       {
        return back()->with('error', 'Wrong Login Details');
       }



}



//----------------------------------------------------

public function login(){
    return view('login');
}

public function logout(){
    auth()->logout();
    return redirect()->route('login');

}
public function logout1(){
    auth()->logout();
    return redirect()->route('Adminlogin');

}


public function Adminlogin(){
    return view('Adminlogin');
}


}
