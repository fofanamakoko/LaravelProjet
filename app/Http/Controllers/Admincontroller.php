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
}

