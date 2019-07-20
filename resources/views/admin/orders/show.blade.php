@extends('layouts.admin')
@section('content')
  <h1>Order Number {{$order->id}}</h1><br>
  <h1>{{$order->payment_id}}</h1>
  @if($orderItems)
<table class="table table-hover table-bordered" id="usersTable">
    <thead>
      <tr>
        <th>id</th>
        <th>SKU</th>
        <th>Game</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orderItems as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->game_id}}</td>
        <td>{{$item->game->title}}</td>
        <td>£{{$item->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{ $orderItems->links() }}
@endif
@stop
@section('scripts')
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">  </script>
  <script>
  $(document).ready( function () {
  $('#usersTable').DataTable({
    "dom": "frt",
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    });
  });
  </script>
@endsection
