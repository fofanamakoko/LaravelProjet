@extends('Layouts.masterLayout')
@section('title')
Home
@endsection

 @section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:900px;">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

                <div class="modal-body">

                <div class="card card-5" style="margin-left: 30px; width:95%;">
                    <div class="card-heading" style="background-color:  #1abc9c;">
                        <h2 class="title" style="color: white; text-shadow: 1px 1px 2px black;">Visit Request Form </h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="visit" method="POST" action="{{ route('homevisit') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="name">The nature of <br/>the visit</div>
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
                                            <div class=form-group >
                                                <input class="form-control" type="date" name="date_arrival" style="width: 340px; margin-left: 125px; margin-top:-30px;">
                                            </div>
                                    </div>

                                    <div class="form-row m-b-55">
                                        <div class="name">Time</div>
                                        <div class="value">
                                            <div class="row row-space">
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <input class="form-control" type="time" name="time_arival"  style="width: 155px;">
                                                        <label class="label--desc" style="width: 100px;">Arrival Time</label>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <input class="form-control" type="time" name="end_time" style="width: 155px;">
                                                        <label class="label--desc" style="width: 100px;">End time</label>
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
                                                        <option disabled="disabled" selected="selected" ></option>
                                                        <option style="background-color: white;" >Company</option>
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
                                                        <input class="form-control" type="text" name="first_name" style="width: 155px;">
                                                        <label class="label--desc" style="width: 100px;">first name</label>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="last_name" style=" width: 155px;">
                                                        <label class="label--desc" style="width: 100px;">last name</label>
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
                                                        <input class="form-control" type="text" name="phone" style="margin-left:65px; width: 218px;">
                                                        <label class="label--desc" style="margin-left:65px; width: 150px;">Phone Number</label>
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
                                        <label class="label label--block" style="text-align: left;">Are you an existing customer?</label>
                                        <div class="p-t-15">
                                            <label class="radio-container m-r-55" >Yes
                                        <input type="radio" checked="checked" name="exist" >
                                        <span class="checkmark" ></span>
                                    </label>
                                            <label class="radio-container" >No
                                        <input type="radio" name="exist">
                                        <span class="checkmark"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-success" type="submit" style="background-color: #1abc9c; color: white; text-shadow: 1px 1px 2px black;">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
    <div>
        <button type="button" class="btn b tn-primary float:center" data-toggle="modal"
        data-target="#exampleModal" style=" margin-left: 500px; margin-top:300px; ">Add visit forn</button>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger" style="margin-left: 100px; margin-top:50px; width: 700px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    @if(session('status'))
        <div class="alert alert-success"role="alert" style="margin-top:75px; margin-left: 100px; width: 700px; background-color: #1abc9c;">
            {{session('status')}}
            <a href="{{ url('dynamic_pdf/pdf')}}" class="btn b tn-primary float:right" role="button" data-bs-toggle="button">Telechager le Badge</a>
        </div>

    @endif


@endsection

@section('scripts')
@endsection
