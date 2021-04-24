@extends('Layouts.indexLayout')

@section('title')
AdminLogin page
@endsection

@section('content')

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="../assets/img/a.png" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Admin login page!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>

                                        <a href="{{route('dashbord1')}}" class="btn btn-primary btn-user btn-block">
                                          valider
                                        </a>

                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



@endsection




