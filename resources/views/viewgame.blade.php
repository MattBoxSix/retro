@extends('layouts.games')

@section('content')

<h1 class="saleGames">{{$showGames['title']}}</h1>
<div class="row">
  <div class="col-lg-6">
    <img src="{{$showGames['image']}}" alt="" class="img-fluid pl-3">
  </div>
  <div class="col-lg-6">
    <p class="font-weight-bold">Description:</p>{{$showGames['description']}}<br><br>
    <p class="font-weight-bold">Quality Score:</p>{{$showGames['score']}}/10<br><br>
    <p class="font-weight-bold">Price:</p>£{{$showGames['price']}}<br><br>
    @if($cart->contains($showGames['id']))
    <a href="#" class="btn btn-primary" role="button">Added!</a>
    @else
      <a href="{{ route('games.addToCart', ['id' => $showGames->id]) }}" class="btn btn-success" role="button">Add to Basket</a>
    @endif
  </div>
</div>
@endsection
