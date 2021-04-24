@extends('Layouts.indexLayout')

@section('title')
Register page
@endsection

@section('content')
  <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img src="../assets/img/a.png" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('registeruser') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="firstname"
                                            placeholder="First Name">
                                            @error('firstname')
                                            <div class="uk-text-danger">Firstname error</div>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="lastname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"
                                        placeholder="Email Address">
                                </div>

<!--
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="datepicker"
                                        placeholder="Date">
                                </div>

                                <div class="form-group">

                                          <label for="spinner" >Time spinner:</label>
                                          <input id="spinner" type="text" class="form-control form-control-user" name="spinner" value="08:30 PM" placeholder="Date">


                                </div> -->



                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="confirmation">
                                    </div>
                                </div>
                                <input type="submit" value="Envoyer" class="btn btn-primary btn-user btn-block">

                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

