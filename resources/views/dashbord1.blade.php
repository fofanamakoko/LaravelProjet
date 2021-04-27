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
                        <h4 class="card-title">LE NOMBRE DE VISITEURS AUJOURD'HUI ({{ $today_total_visits }})</h4>
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
                                    @foreach ($today_visits as $item1)

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

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">LE NOMBRE TOTAL DE VISITEURS ({{ $total_visits }})</h4>
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

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Les visiteurs de la semaine en cours</h4>
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
                                    @foreach ($dt as $item2)

                                        <tr>
                                            <td>
                                                {{ $item2->id }}
                                            </td>
                                            <td>
                                                {{ $item2->first_name }}{{ $item2->last_name }}
                                            </td>
                                            <td>
                                                {{ $item2->persons }}
                                            </td>
                                            <td>
                                                {{ $item2->date_arrival }}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Les visiteurs du mois en cours</h4>
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
