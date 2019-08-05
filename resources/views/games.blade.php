@extends('layouts.games')

@section('content')

<h1 class="saleGames">{{ucfirst($title)}}</h1>
<div class="row">
  @foreach($allGames as $game)
    <div class="col-6 col-lg-3 py-2"><img src="{{$game->image}}" alt="" class="hotItemsShow img-fluid"><br><br>Price £{{$game->price}}<br><br><a href="{{route('viewgames.show', $game->id)}}" class="btn btn-primary" role="button">View Item</a></div>
  @endforeach
</div>
@endsection
