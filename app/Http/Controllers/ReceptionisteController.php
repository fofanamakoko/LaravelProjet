<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;


class ReceptionisteController extends Controller
{
    public function Visit(){

        $visits=Visit::all();


                return view('receptionniste',['currentpage'=>'receptionniste'] )->with('Visit',$visits);
            }
    //
}
