@extends('layouts.games')

@section('content')

<h1>{{ucfirst($title)}}</h1>
<div class="row saleGames">
  @foreach($allGames as $game)
    @if($cart->contains($game->id))
    <div class="col-6 col-lg-3"><img src="{{$game->image}}" alt="" class="buytItems img-fluid"><br>Price £{{$game->price}}<br><br><a href="#" class="btn btn-primary" role="button">Added!</a></div>
  @else
  <div class="col-6 col-md-3"><img src="{{$game->image ? $game->image : 'http://placehold.it/400x400'}}" class="buytItems"></td><br>{{$game->title}}<br>Price £{{$game->price}}<br><br><a href="{{ route('games.addToCart', ['id' => $game->id]) }}" class="btn btn-success" role="button">Add to Basket</a></div>
@endif
  @endforeach
</div>
@endsection
