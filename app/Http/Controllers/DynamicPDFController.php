<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use pdf;

class DynamicPDFController extends Controller
{
    public function index(){

        $customer_data = $this->get_customer_data();
        return view('dynamic_pdf', ['currentpage'=>'dynamic_pdf'])->with('customer_data', $customer_data);

    }

    public function get_customer_data(){

        $customer_data = DB::table('visits')
                            ->limit(1)
                            ->latest('id')
                            ->get();
        return $customer_data;
    }
    public function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    public function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '

     ';
     foreach($customer_data as $customer)
     {
      $output .= '
      <h3 align="center">Rapport de la visite du '.$customer->date_arrival.'</h3>
      <p>Employé :'.$customer-> persons.'</p>
      <p>Visiteur :'.$customer-> first_name . ' ' . $customer->last_name.'</p>
      <p>Heure début :'.$customer-> time_arival.'</P>
      <p>Heure fin :'.$customer-> end_time.'</p>
      ';

     }
     $output .= '</table>';
     return $output;
    }
}
