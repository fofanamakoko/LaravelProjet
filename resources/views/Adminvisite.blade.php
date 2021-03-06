@extends('Layouts.AdminLayout')

@section('title')
    VISITE PAGE
@endsection

@section('content')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="visit" method="POST" action="{{ route('Admindata') }}">
                        @csrf
                        <div class="form-row">
                            <div class="name">The nature of <br />the visit</div>
                            <div class="value">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <div class="form-group">
                                        <select name="subject" class="form-control" style="width: 340px;">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option>Business visit</option>
                                            <option>Technical issues visits</option>
                                            <option>Consultancy visit</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Date of arrival</div>
                            <div class=form-group>
                                <input class="form-control" type="date" name="date_arrival"
                                    style="width: 340px; margin-left: 125px; margin-top:-30px;">
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Time</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" type="time" name="time_arival"
                                                style="width: 100px;">
                                            <label class="label--desc" style="width: 100px;">Arrival Time</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" type="time" name="end_time"
                                                style="margin-left:50px; width: 100px;">
                                            <label class="label--desc" style="width: 100px; margin-left:100px;">End
                                                time</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Company or individual</div>
                            <div class="value">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <div class="form-group">
                                        <select name="company_individual" class="form-control" style="width: 340px;">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option style="background-color: white;">Company</option>
                                            <option style="background-color: white;">Individual</option>
                                        </select>
                                    </div>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company name</div>
                            <div class="value">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="company" style="width: 340px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="first_name" style="width: 150px;">
                                            <label class="label--desc" style="width: 100px;">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="last_name"
                                                style="margin-left:100px; width: 150px;">
                                            <label class="label--desc" style=" margin-left:100px; width: 100px;">last
                                                name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" style="width: 340px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="area_code" style="width: 100px;">
                                            <label class="label--desc" style="width: 100px;">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="phone"
                                                style="margin-left:45px; width: 218px;">
                                            <label class="label--desc" style="margin-left:45px;">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">The persons accompanied</div>
                            <div class="value">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="persons" style="width: 340px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block" style="text-align: left;">Are you an existing
                                customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success" type="submit"
                                style="background-color: #1abc9c; color: white; text-shadow: 1px 1px 2px black;">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="card">

                <div class="card-header">

                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#exampleModal">ADD DATA</button>



                    <h4 class="card-title"> DATA PAGE </h4>



                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th class="W-10p">
                                    ID
                                </th>
                                <th class="W-10p">
                                    Days
                                </th>
                                <th class="W-10p">
                                    Arrival Time
                                </th>
                                <th class="W-10p">
                                    End time
                                </th>
                                <th class="W-10p">
                                    visitor Name
                                </th>
                                <th class="W-10p">
                                    Employer Name
                                </th>
                                <th class="W-10p">
                                    EDITE
                                </th>
                                <th class="W-10p">
                                    DELETE
                                </th>

                            </thead>
                            <tbody>
                                @foreach ($Visit as $element)


                                    <tr>
                                        <td>
                                            {{ $element->id }}
                                        </td>
                                        <td>
                                            {{ $element->date_arrival }}
                                        </td>
                                        <td>
                                            {{ $element->time_arival }}
                                        </td>
                                        <td>
                                            {{ $element->end_time }}
                                        </td>
                                        <td>
                                        {{ $element->first_name . ' ' . $element->last_name }}
                                        </td>

                                        <td>
                                            {{ $element->persons }}
                                        </td>
                                        <td>
                                            <a href="{{ url('about-us/'. $element->id) }}"
                                                class="btn btn-success">EDITE</a>
                                        </td>
                                        <td>
                                            <form action="/data_delete/{{ $element->id }}" method="post">
                                                {{ @csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
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



@endsection
