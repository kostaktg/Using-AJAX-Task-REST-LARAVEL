@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
                      <input class="click" type="button"  value="ajax">
                      <input  type="hidden" id="id" value="{{ $user->id }}"> </td>
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


<script type="text/javascript">







  $(function(){

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    

    $('.click').click(function(){
      var id = $('#id').val();

      $.ajax({
       url  : "{{action('HomeController@del')}}",
       type : "POST",
       async: false,
       data : {
                'id'  : id
       },
       success:function(re)
       {
        alert(re)
        $('#id').val('');
       }


      });
    });
  

});

</script>
@endsection
