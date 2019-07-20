@extends('layouts.admin')

@section('content')
<br>
  <div class="card-body w-50 mx-auto bg-dark">
    <div class="card-header bg-success text-white">Confirm Order</div>
    {!! Form::model($orderSearch, ['method' =>'PATCH', 'action'=> ['OrderController@update', $orderSearch->id], 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group {{$errors->has('processed') ? 'has-error' : ''}}">
      {!! Form::label('processed', 'Processed Yes/No') !!}
      {!! Form::select('processed', array(1 =>'Yes', 0=>'No'), null, ['class'=>'form-control'])!!}
      @if($errors->has('processed'))
      {{$errors->first('processed')}}
      @endif
      </div>
    <div class="form-group">
      {!! Form::submit('Update Order', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
@endsection
