@extends('layouts.admin')

@section('content')
  <br>
  <br>
  <div class="card-body w-50 mx-auto bg-dark">
    <div class="card-header bg-success text-white">Edit Message</div>
    {!! Form::model($messageSearch, ['method' =>'PATCH', 'action'=> ['HolidayController@update', $messageSearch->id], 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
    {!! Form::label('message', 'Message:') !!}
    <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
      {!! Form::textarea('message', null, ['class'=>'form-control','rows' => 2])!!}
      @if($errors->has('message'))
        {{$errors->first('message')}}
      @endif
    </div>
    <div class="form-group {{$errors->has('set') ? 'has-error' : ''}}">
      {!! Form::label('set', 'Set Message?') !!}
      {!! Form::select('set', array(1 =>'Yes', 0=>'No'), 0, ['class'=>'form-control'])!!}
      @if($errors->has('set'))
      {{$errors->first('set')}}
      @endif
    </div>
    <div class="form-group">
      {!! Form::submit('Update Message', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
@endsection
