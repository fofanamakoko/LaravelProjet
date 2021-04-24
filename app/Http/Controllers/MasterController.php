<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function Profile(){
        return view('Profile',['currentpage'=>'Profile']);
    }



    public function receptionniste(){
        return view('receptionniste',['currentpage'=>'receptionniste']);
    }

    public function home(){
        return view('home',['currentpage'=>'home']);
    }

}
