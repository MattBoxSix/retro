@extends('layouts.admin')

@section('content')

  <div class="card-body w-50 mx-auto bg-dark">
    <div class="card-header bg-success text-white">Edit Game</div>
    {!! Form::model($gameSearch, ['method' =>'PATCH', 'action'=> ['AdminGamesController@update', $gameSearch->id], 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
      {!! Form::label('title', 'Game Title:') !!}
      {!! Form::text('title', null, ['class'=>'form-control', 'rows' => 3])!!}
      @if($errors->has('title'))
      {{$errors->first('title')}}
      @endif
      </div>
    <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
      {!! Form::label('image', 'Image:') !!}
      {!! Form::file('image', null, ['class'=>'form-control'])!!}
      @if($errors->has('image'))
      {{$errors->first('image')}}
      @endif
    </div>
    <div class="form-group {{$errors->has('price') ? 'has-error' : ''}}">
      {!! Form::label('price', 'Price in pounds:') !!}
      {!! Form::text('price', null, ['class'=>'form-control'])!!}
      @if($errors->has('price'))
      {{$errors->first('price')}}
      @endif
    </div>
    <div class="form-group {{$errors->has('score') ? 'has-error' : ''}}">
      {!! Form::label('score', 'Score out of 10:') !!}
      {!! Form::text('score', null, ['class'=>'form-control'])!!}
      @if($errors->has('score'))
        {{$errors->first('score')}}
      @endif
    </div>
    <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
      {!! Form::label('description', 'Description:') !!}
      {!! Form::textarea('description', null, ['class'=>'form-control'])!!}
      @if($errors->has('description'))
        {{$errors->first('description')}}
      @endif
    </div>
    <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}}">
      {!! Form::label('category_id', 'Category:') !!}
      {!! Form::select('category_id', [''=>'Choose Category'] + $categories, null, ['class'=>'form-control'])!!}
      @if($errors->has('category_id'))
      {{$errors->first('category_id')}}
      @endif
    </div>
    <div class="form-group {{$errors->has('sold') ? 'has-error' : ''}}">
      {!! Form::label('sold', 'Sold:') !!}
      {!! Form::select('sold', array(1 =>'Yes', 0=>'No'), 1, ['class'=>'form-control'])!!}
      @if($errors->has('sold'))
      {{$errors->first('sold')}}
      @endif
    </div>
    <div class="form-group {{$errors->has('promote') ? 'has-error' : ''}}">
      {!! Form::label('promote', 'Promote on Front page?') !!}
      {!! Form::select('promote', array(1 =>'Yes', 0=>'No'), null, ['class'=>'form-control'])!!}
      @if($errors->has('promote'))
      {{$errors->first('promote')}}
      @endif
    </div>
    <div class="form-group">
      {!! Form::submit('Update Game', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>

@endsection
