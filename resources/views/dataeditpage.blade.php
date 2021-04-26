@extends('Layouts.AdminLayout')

@section('title')
EDITE register
@endsection

@section('content')
<div class="row">

    <div class="col-md-10"  style="margin-left:100px;">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Edit Role for register User</h4>
        </div>
        <div class="card-body">
         <div class="row">
             <div class="col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="" method="POST" >
                    {{ @csrf_field()}}




                    <div class="form-group">
                        <label>time</label>

                        <input class="form-control" type="date" name="date_arrival" style="width: 340px;" value="{{$visits->name}}">
                      </div>
                      <div class="form-group">
                        <label>Arrival Time</label>
                        <input class="form-control" type="time" name="time_arival"  style="width: 340px; "value="{{$visits->name}}">

                    </div>
                    <div class="form-group">
                        <label>End time</label>

                        <input class="form-control" type="time" name="end_time" style=" width: 340px;"value="{{$visits->name}}">

                    </div>
                    <div class="form-group">
                        <label>Employer Name</label>
                        <input class="form-control" type="text" name="persons" style="width: 340px;"value="{{$visits->name}}">
                    </div>
                    <div class="form-group">
                        <label class="label--desc" style="width: 100px;">first name</label>
                        <input class="form-control" type="text" name="first_name" style="width: 340px;">

                    </div>
                    <div class="form-group">
                        <label class="label--desc" style="  width: 100px;">last name</label>
                        <input class="form-control" type="text" name="last_name" style=" width: 340px;"value="{{$visits->name}}">

                    </div>



                      <button type="submit"class="btn btn-success">Update</button>
                      <a href="/Adminvisite" class="btn btn-danger">Cancel</a>
                 </form>

             </div>
         </div>
        </div>
      </div>
    </div>
</div>




@endsection
@section('scripts')
@endsection




