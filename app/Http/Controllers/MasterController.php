<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visit;

class MasterController extends Controller
{




    public function receptionniste(){

        $visits=Visit::all();




        return view('receptionniste',['currentpage'=>'receptionniste'] )->with('Visit',$visits);
    }


    public function home(){

        return view('home',['currentpage'=>'home']);
    }


}

