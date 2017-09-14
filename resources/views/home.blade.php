@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                

                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-hover">

                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Registration data</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
<tr>
                      <th scope="row">{{ $user->name }}</th>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->created_at }}</td>
                      <td><a href="{{route('del',$user->id)}}">delete</a>
                      </td>
                  </tr>

                  @endforeach
                  
              </tbody>
          </table>




      </div>

      <div class="panel-body">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif


    </div>
</div>
</div>
</div>
</div>



@endsection
