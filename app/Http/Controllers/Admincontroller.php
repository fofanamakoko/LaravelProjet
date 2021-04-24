<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{

    public function registered(){
        return view('registered',['currentpage'=>'registered']);
    }


    public function dashbord1(){
        return view('dashbord1',['currentpage'=>'dashbord1']);
    }
}

