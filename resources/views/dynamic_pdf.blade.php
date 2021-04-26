@extends('Layouts.masterLayout')
@section('title')
PDF
@endsection

@section('content')

<div id="card-body">

    @foreach ($customer_data as $customer)
        <div class="card-body-div">
            <div>{{ $customer->id }}
                <p id="visite" style="text-align: center;">Visite du {{ $customer->date_arrival }} </p><br>
            </div>

            <p>Employé :{{ $customer->persons }}</p>
            <p>Visiteur :{{ $customer->first_name . ' ' . $customer->last_name }}</p>
            <p>Heure début :{{ $customer->time_arival }}</P>
            <p>Heure fin :{{ $customer->end_time }}</p>

        </div>
    @endforeach
</div>



@endsection
@section('scripts')
@endsection
