@extends('Layouts.AdminLayout')

@section('title')
    Register role
@endsection

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form class="user" method="POST" action="{{ route('registeruser') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    name="firstname" placeholder="First Name">
                                @error('firstname')
                                    <div class="uk-text-danger">Firstname error</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    name="lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputFonction"
                                name="usertype" placeholder="Fonction">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"
                                placeholder="Email Address">
                        </div>

                        <div class="form-group">

                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                    placeholder="Password" name="password">


                        </div>
                        <input type="submit" value="Envoyer" class="btn btn-primary btn-user btn-block">

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
                            data-target="#exampleModal">ADD USER</button>
                    <h4 class="card-title"> USERS PAGE  </h4>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                                <th>
                                    DELETE
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($users as $row)

                                    <tr>
                                        <td>
                                            {{ $row->id }}
                                        </td>
                                        <td>
                                            {{ $row->username }}
                                        </td>
                                        <td>
                                            {{ $row->email }}
                                        </td>
                                        <td>
                                            {{ $row->usertype }}
                                        </td>
                                        <td>
                                            <a href="/role-edit/{{ $row->id }}" class="btn btn-success">EDITE</a>
                                        </td>
                                        <td>
                                            <form action="/role_delete/{{ $row->id }}" method="post">
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
