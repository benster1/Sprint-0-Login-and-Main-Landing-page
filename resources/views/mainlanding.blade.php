@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Main Landing Page</div>

                <div class="panel-body">
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>ID</th>
                      <th>Stories</th>
                      <th> Status</th>
                      <th>Created at</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>1</td>
                      <td>Login page</td>
                      <td>Done</td>
                      <td>01/18/2018</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>2</td>
                      <td>Main Landing page</td>
                      <td>Done</td>
                      <td>01/18/2018</td>
                    </tr>
                    
                  </tbody>
                </table>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                            
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
