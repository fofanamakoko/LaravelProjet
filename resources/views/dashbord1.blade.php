@extends('Layouts.AdminLayout')
@section('title')
    Dashbord
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="font-size: 22px">LE NOMBRE DE VISITEURS AUJOURD'HUI </h4>
                        <p style="font-size: 60px; text-align:center; color:#f96332">{{ $today_total_visits }}</p>
                    </div>

                </div>
            </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="font-size: 22px;">LE NOMBRE TOTAL DE VISITEURS <span style="color:#f96332"> ({{ $total_visits }})</span></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    NAME
                                </th>
                                <th>
                                    DATE
                                </th>

                            </thead>
                            <tbody>
                                @foreach ($visits as $item1)

                                    <tr>
                                        <td>
                                            {{ $item1->id }}
                                        </td>
                                        <td>
                                            {{ $item1->first_name }}{{ $item1->last_name }}
                                        </td>
                                        <td>
                                            {{ $item1->date_arrival }}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="font-size: 22px;">LES VISITEURS DU MOIS EN COURS<span style="color:#f96332"> ({{ $total_year}})</span> </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        VISITOR
                                    </th>
                                    <th>
                                        EMPLOYE
                                    </th>
                                    <th>
                                        DATE
                                    </th>

                                </thead>
                                <tbody>
                                    @foreach ($year as $item3)

                                        <tr>
                                            <td>
                                                {{ $item3->id }}
                                            </td>
                                            <td>
                                                {{ $item3->first_name }}{{ $item3->last_name }}
                                            </td>
                                            <td>
                                                {{ $item3->persons }}
                                            </td>
                                            <td>
                                                {{ $item3->date_arrival }}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
@endsection
