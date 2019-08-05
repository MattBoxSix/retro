@extends('layouts.games')

@section('content')

<h1 class="saleGames">Search Results</h1>
<div class="row mt-0">
  @foreach($searchResults as $result)
  <div class="col-6 col-lg-3 py-2"><img src="{{$result->image}}" alt="" class="hotItemsShow img-fluid"><br><br>Price £{{$result->price}}<br><br><a href="{{route('viewgames.show', $result->id)}}" class="btn btn-primary" role="button">View Item</a></div>
  @endforeach
</div>
@endsection
