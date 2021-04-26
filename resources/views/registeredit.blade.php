@extends('Layouts.AdminLayout')

@section('title')
EDITE register
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
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
                <form action="/role-update/{{$users->id}}" method="POST" >
                    {{ @csrf_field()}}
                    {{ method_field('PUT')}}



                    <div class="form-group">
                        <label>User name</label>

                        <input type="text" class="form-control" value="{{$users->username}}" name="username">
                      </div>

                      <div class="form-group">
                        <label>Give role</label>
                        <input  type="text" name="usertype" class ="form-control"value="{{$users->usertype}}">
                           <!-- <option value="admin">ADMIN</option>
                            <option value="employer">employer</option>
                        </select>-->

                      </div>

                      <button type="submit"class="btn btn-success">Update</button>
                      <a href="/registered" class="btn btn-danger">Cancel</a>
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




