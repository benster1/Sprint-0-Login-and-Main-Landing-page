@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div align="center">
            <a href="/createtest"><img src="test.png" width="80px" title="Create a New Test" /></a>
          </div>
            <div class="panel panel-default">
                <div class="panel-heading">Main Landing Page</div>

                <div class="panel-body">
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>Story</th>
                      <th>Login</th>
                      <th>Link</th>
                      <th> Status</th>
                      <th>Created at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Login page</td>
                      <td>X@basecampcs.com</td>
                      <td>https:/www.website1.com</td>
                      <td>Done</td>
                      <td>01/18/2018</td>
                      <td><a href="/view"><img src="view.ico" width="40px" title="View Test" /></a></td>
                    </tr>
                    <tr>
                      <td>Main Landing page</td>
                      <td>Y@basecampcs.com</td>
                      <td>https:/www.website2.com</td>
                      <td>Done</td>
                      <td>01/18/2018</td>
                      <td><a href="/view"><img src="view.ico" width="40px" title="View Test" /></a></td>
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
