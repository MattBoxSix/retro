@extends('layouts.games')

@section('content')

<h1>Search Results</h1>
<div class="row saleGames">
  @foreach($searchResults as $result)
  @if($cart->contains($result->id))
    <div class="col-6 col-md-3"><img src="{{$result->image ? $result->image : 'http://placehold.it/400x400'}}" class="buytItems"></td><br>{{$result->title}}<br>Price £{{$result->price}}<br><br><a href="#" class="btn btn-primary" role="button">Added!</a></div>
  @else
    <div class="col-6 col-md-3"><img src="{{$result->image ? $result->image : 'http://placehold.it/400x400'}}" class="buytItems"></td><br>{{$result->title}}<br>Price £{{$result->price}}<br><br><a href="{{ route('games.addToCart', ['id' => $result->id]) }}" class="btn btn-success" role="button">Add to Basket</a></div>
  @endif
  @endforeach
</div>
@endsection
