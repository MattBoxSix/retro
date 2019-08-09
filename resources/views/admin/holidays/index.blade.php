@extends('layouts.admin')
@section('content')
<h1>Holiday Message</h1>
<br>
{!! Form::open(['method' =>'POST', 'action'=> 'HolidayController@store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
<div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
  {!! Form::textarea('message', null, ['class'=>'form-control','rows' => 2])!!}
  @if($errors->has('message'))
    {{$errors->first('message')}}
  @endif
</div>
<div class="form-group">
  {!! Form::submit('Add Message', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
<table class="table">
  <thead>
    <tr>
      <th>Message</th>
      <th>Set?</th>
      <th>Action</th>
    </tr>
  </thead>
  @foreach($messages as $messages)
  <tbody>
    <tr>
      <td>{{$messages->message}}</td>
      <td>{{$messages->set == 0 ? 'No' : 'Yes'}}</td>
      <td><a href="{{ route('admin.holidays.edit', $messages->id)}}" class="btn btn-success" role="button">Edit</a><br></td>
    </tr>
  </tbody>
@endforeach
</table>
@stop
