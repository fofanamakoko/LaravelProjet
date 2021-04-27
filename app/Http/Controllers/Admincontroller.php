<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visit;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;





class Admincontroller extends Controller
{

    public function registered(){

$users=User::all();


        return view('registered',['currentpage'=>'registered'] )->with('users',$users);
    }


    public function dashbord1(){

        $date = date_create();

        $visits=Visit::all();
        $total_visits=Visit::all()->count();

        $total=User::all()->count();
        $users=User::all();

       $today_visits = Visit::whereDate('created_at', Carbon::today())->get();
        $today_total_visits = Visit::whereDate('created_at', Carbon::today())->get()->count();

        /*Carbon::setWeekStartsAt(Carbon::MONDAY);
        Carbon::setWeekEndsAt(Carbon::SUNDAY);
        $dt=Visit::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();*/
        $dts = Carbon::now();
        $dt = Visit::where(Visit::raw("WEEKOFYEAR(created_at)"), $dts->weekOfYear)->get();

        $year = Visit::whereYear('created_at', Carbon::now()->year)
        ->whereMonth('created_at', Carbon::now()->month)
        ->get();


        return view('dashbord1',['currentpage'=>'dashbord1'])->with('visits',$visits)
        ->with('total_visits',$total_visits)
        ->with('users',$users)
        ->with('today_visits',$today_visits)
        ->with('today_total_visits',$today_total_visits)
        ->with('dt',$dt)
        ->with('year',$year)
        ->with('total',$total);
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


public function checkadmin(Request $request){


    $validated = $request->validate([
       'email' => 'required|email',
       'password' => 'required|min:3'

   ]);

    $admin_data = array(
       'email'  => $request->get('email'),
       'password' => $request->get('password'),
       'usertype'  => $request->get('usertype')
   );

      if(Auth::attempt($admin_data))
      {
          if($admin_data['usertype'] =='admin'){
              return redirect('dashbord1');
          }else{
            return back()->with('error', 'You are not admin');
          }

      }
      else
      {
       return back()->with('error', 'Wrong Login Details');
      }



}

}


