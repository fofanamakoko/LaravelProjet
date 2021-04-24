@extends('Layouts.AdminLayout')

@section('title')
AdminLogin page
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Register ROLES</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
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
                <tr>
                  <td>
                  leila
                  </td>
                  <td>
                    leila@gmail.com
                  </td>
                  <td>
                    employer
                  </td>
                  <td>
                   <a href ="0"class ="btn btn-success">EDITE</a>
                  </td>
                  <td>
                   <a href="0"class ="btn btn-danger">DELETE</a>
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




