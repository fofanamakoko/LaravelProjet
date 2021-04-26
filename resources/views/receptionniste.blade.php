@extends('Layouts.masterLayout')
@section('title')
   receptionniste
@endsection

@section('content')

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">

<div id="contactwrap">
    <div class="container">

<div class="wrapper wrapper--w790">

<div class="card card-5">
    <div class="card-heading">
        <h2 class="title">Visits of today</h2>
        <h3 class="title">21/04/2021</h3>
    </div>
    <div class="card-body">

        <div class="card-body-div">

@foreach ($Visit as $element)

            <div><p id="visite" style="text-align: center;">Visite{{$element->id}}</p><br>

            </div>
            <p>Employé :{{ $element->persons}}</p>

            <p>Visiteur :{{ $element->first_name." ".$element->last_name}}</p>
            <p>Heure début :{{ $element->time_arival}}</P>
            <p>Heure fin :{{ $element->end_time}}</p>
            @endforeach

        </div>

    </div>

</div>




    </div>
@endsection
@section('scripts')
@endsection
