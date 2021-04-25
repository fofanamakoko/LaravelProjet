<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;




class Admincontroller extends Controller
{

    public function registered(){

$users=User::all();


        return view('registered',['currentpage'=>'registered'] )->with('users',$users);
    }


    public function dashbord1(){
        return view('dashbord1',['currentpage'=>'dashbord1']);
    }
    public function  Adminvisite(){
        return view('Adminvisite',['currentpage'=>'Adminvisite']);
    }

    public function registeredit(Request $request, $id){
      $users=User::findOrFail($id);
      return view('registeredit',['currentpage'=>'registeredit'])->with('users',$users);
    }

    public function registerupdate(Request $request, $id){



        $users=User::find($id);
        $users->name=$request->input('username');
        $users->usertype=$request->input('usertype');
        $users->update();
        return redirect('/registered')->with('status','your Data is update');
    }
    public function registerdelete($id){
        $users =User::findOrFail($id);
        $users->delete();
        return redirect('/registered')->with('status','your Data is delet');

    }
}




