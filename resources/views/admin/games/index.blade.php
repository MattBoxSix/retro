@extends('layouts.admin')
@section('content')
  <h1>Games <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNew">Add New</button></h1>
  @if($games)
<table class="table table-hover table-bordered" id="usersTable">
    <thead>
      <tr>
        <th width="5%">SKU</th>
        <th width="5%">Title</th>
        <th width="5%">Score</th>
        <th>Description</th>
        <th width="5%">Image</th>
        <th width="5%">Price</th>
        <th width="10%">Category</th>
        <th width="5%">Sold?</th>
        <th width="5%">Promote?</th>
        <th width="5%">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($games as $game)
      <tr>
        <td>{{$game->id}}</td>
        <td>{{$game->title}}</td>
        <td>{{$game->score}}</td>
        <td>{{$game->description}}</td>
        <td><img src="{{$game->image}}" alt="" width="50"></td>
        <td>£{{$game->price}}</td>
        <td>{{$game->category->name}}</td>
        <td>{{$game->sold == 0 ? 'No' : 'Yes'}}</td>
        <td>{{$game->promote == 1 ? 'Yes' : 'No'}}</td>
        <td><div class="btn-group-vertical">
          <a href="{{ route('admin.games.edit', $game->id)}}" class="btn btn-success" role="button">Edit</a><br>
          {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminGamesController@destroy', $game->id]]) !!}
          <div class="form-group">
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
          </div>
          {!! form::close() !!}
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{$games->links()}}
@endif
<div class="modal fade" id="addNew" tabindex="-1" role="dialog">
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
</div>

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
  $('#usersTable').DataTable({
    "dom": "frt",
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    });
  });
  </script>
@endsection
