<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visit;




class Admincontroller extends Controller
{

    public function registered(){

$users=User::all();


        return view('registered',['currentpage'=>'registered'] )->with('users',$users);
    }


    public function dashbord1(){
        return view('dashbord1',['currentpage'=>'dashbord1']);
    }


    public function registeredit(Request $request, $id){
      $users=User::findOrFail($id);
      return view('registeredit',['currentpage'=>'registeredit'])->with('users',$users);
    }

    public function registerupdate(Request $request, $id){



        $users=User::find($id);
        $users->username=$request->input('username');
        $users->usertype=$request->input('usertype');
        $users->update();
        return redirect('/registered')->with('status','your Data is update');
    }
    public function registerdelete($id){
        $users =User::findOrFail($id);
        $users->delete();
        return redirect('/registered')->with('status','User is delet');

    }


    public function datadelete($id){
        $visits =Visit::findOrFail($id);
        $visits->delete();
        return redirect('/Adminvisite')->with('status','your Data is delet');

    }

    public function Adminvisite(){

        $visits=Visit::all();


        return view('Adminvisite',['currentpage'=>'Adminvisite'] )->with('Visit',$visits);
    }
    public function dataedit(Request $request, $id){

        $visits=Visit::findOrFail($id);


      return view('dataeditpage',['currentpage'=>'dataeditpage'] )->with('visits',$visits);

    }
    public function dataupdate(Request $request, $id){

        $visits=Visit::findOrFail($id);
        $visits->date_arrival=$request->input('date_arrival');
        $visits->time_arival=$request->input('time_arival');
        $visits->end_time=$request->input('end_time');
        $visits->persons=$request->input('persons');
        $visits->first_name=$request->input('first_name');
        $visits->last_name=$request->input('last_name');
        $visits->update();
        return redirect('/Adminvisite')->with('status','your Data is update');

}

}


