@extends('Layouts.AdminLayout')

@section('title')
    VISITE PAGE
@endsection

@section('content')



    <div class="row">


        <div class="col-md-12">
            <div class="card">

                <div class="card-header">



                    <h4 class="card-title"> DATA PAGE </h4>



                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    USERNAME
                                </th>
                                <th>
                                    EMAIL
                                </th>
                                <th>
                                    FONCTIONS
                                </th>
                                <th>
                                    EDITE
                                </th>

                            </thead>
                            <tbody>


                                <tr>
                                    <td>
                                   1
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success">CREER</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success">READ</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success">UPDATE</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success">DELETE</a>
                                    </td>
                                    <td>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
