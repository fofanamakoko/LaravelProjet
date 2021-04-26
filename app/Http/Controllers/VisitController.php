<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Dotenv\Validator;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeVisit(Request $request){

        //
    $validated = $request->validate([
        'subject' => 'required',
        'date_arrival' => 'required',
        //'time_arrival' => 'required',
        'end_time' => 'required',
        'company_individual' => 'required',
        'first_name' => 'required',
        'company' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        //'tel' => 'required',
        'persons' => 'required',
        'exist' => 'required'

    ]);
    $visit = new Visit;
    $visit->subject=$request->subject;
    $visit->date_arrival=$request->date_arrival;
    $visit->time_arival=$request->time_arival;
    $visit->end_time=$request->end_time;
    $visit->company_individual=$request->company_individual;
    $visit->company=$request->company;
    $visit->first_name=$request->first_name;
    $visit->last_name=$request->last_name;
    $visit->email=$request->email;
    $visit->tel=$request->area_code." ".$request->phone;

    $visit->persons=$request->persons;
    $visit->exist=$request->exist;
    $visit->save();
    return redirect('/home')->with('status','The visit is registered successfully!');
    }
    public function Admindata(Request $request){

        //
    $validated = $request->validate([
        'subject' => 'required',
        'date_arrival' => 'required',
        //'time_arrival' => 'required',
        'end_time' => 'required',
        'company_individual' => 'required',
        'first_name' => 'required',
        'company' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        //'tel' => 'required',
        'persons' => 'required',
        'exist' => 'required'

    ]);
    $visit = new Visit;
    $visit->subject=$request->subject;
    $visit->date_arrival=$request->date_arrival;
    $visit->time_arival=$request->time_arival;
    $visit->end_time=$request->end_time;
    $visit->company_individual=$request->company_individual;
    $visit->company=$request->company;
    $visit->first_name=$request->first_name;
    $visit->last_name=$request->last_name;
    $visit->email=$request->email;
    $visit->tel=$request->area_code." ".$request->phone;

    $visit->persons=$request->persons;
    $visit->exist=$request->exist;
    $visit->save();
    return redirect('/Adminvisite')->with('status','The visit is registered successfully!');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
