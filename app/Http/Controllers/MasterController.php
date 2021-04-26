<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visit;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{




    public function Receptionistelogin(Request $request){

        $visits=Visit::all();

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'

        ]);

         $receptioniste_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password'),
            'usertype'  => $request->get('usertype')
        );

           if(Auth::attempt($receptioniste_data ))
           {

               if($receptioniste_data ['usertype'] =='receptionniste'){
                   return view('receptionniste',['currentpage'=>'receptionniste'] )->with('Visit',$visits);
               }else{
                 return back()->with('error', 'You are not receptioniste');
               }

           }
           else
           {
            return back()->with('error', 'Wrong Login Details');
           }


    }

    public function Receptionniste(){
        return view('Receptionnistelogin');
    }




    public function home(){

        return view('home',['currentpage'=>'home']);
    }


}

