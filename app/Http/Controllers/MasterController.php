<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function Profile(){
        return view('Profile');
    }
    public function dashbord(){
        return view('dashbord');
    }
    public function receptionniste(){
        return view('receptionniste');
    }

}
