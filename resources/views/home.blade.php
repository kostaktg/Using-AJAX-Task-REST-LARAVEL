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
  $(document).ready(function(){
    loadScore()
  })

  //ceate function loadScore

function loadScore()
{
  $.ajax({
    type  :  'get',
    url   :  "{{url('home')}}",
    
    dataType : 'json',
    success:function(data)
    {

      $('tbody').empty();
      $.each(data,function(i,user){
        
        //show to table
        var row = $('<tr/>');
        row.append($('<td/>',{
          text : user.id,
        })).append($('<td/>',{
          text : user.name,
        })).append($('<td/>',{
          text : user.created_at,
        })).append($('<td/>',{
        })).append($('<a>',{
          href : "delete/".concat(user.id),
          text : "delete",
        }))

        //---- append to body

        $('tbody').append(row);

      })



        

      }
    
  })
}
</script>

@endsection
