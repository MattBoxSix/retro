@extends('layouts.admin')
@section('content')
  <h1>Orders</h1>
  @if($allOrders)
<table class="table table-hover table-bordered" id="ordersTable">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Total</th>
        <th>Processed?</th>
        <th>User ID</th>
        <th>Address Line 1</th>
        <th>Address Line 2</th>
        <th>City</th>
        <th>County</th>
        <th>Postcode</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($allOrders as $orders)
      <tr>
        <td><a href="{{ route('admin.orders.show', $orders->id)}}"><button class="btn btn-success">{{$orders->id}}</button></a></td>
        <td>{{$orders->total}}</td>
        @if ($orders->processed == 0)
          <td class="bg-danger">No</td>
        @else
          <td class="bg-success">Yes</td>
        @endif
        <td>{{$orders->user_id}}</td>
        <td>{{$orders->addressLine1}}</td>
        <td>{{$orders->addressLine2}}</td>
        <td>{{$orders->city}}</td>
        <td>{{$orders->county}}</td>
        <td>{{$orders->postcode}}</td>
        <td><a href="{{ route('admin.orders.edit', $orders->id)}}" class="btn btn-success" role="button">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{ $allOrders->links() }}
@endif
{{-- <div class="modal fade" id="addNew" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Add Game</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      {!! Form::open(['method' =>'POST', 'action'=> 'AdminGamesController@store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
      @include('includes.admin.gameForm')
      <div class="form-group">
        {!! Form::submit('Add Game', ['class'=>'btn btn-primary']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div> --}}

{{-- <!--EDIT GAME SECTION-->
<div class="modal fade" id="editGame" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Edit Game</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      {!! Form::model($game, ['method' =>'PATCH', 'action'=> ['AdminGamesController@update', $game->id], 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
      @include('includes.admin.gameForm')
      <div class="form-group">
        {!! Form::submit('Update Game', ['class'=>'btn btn-primary']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div> --}}
@stop

@section('scripts')
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">  </script>
  <script>
  $(document).ready( function () {
  $('#ordersTable').DataTable({
    "dom": "frt",
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
    "columnDefs": [
    { "width": "15%", "targets": 4 }
  ]
    });
  });
  </script>
@endsection
