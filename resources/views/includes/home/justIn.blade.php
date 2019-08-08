
  <div class="mainHeaders font-weight-bold"><h2>Just In!</h2></div>
  <div class="row">
      @foreach($gamesJustIn as $justIn)
          {{-- @if($cart->contains($justIn->id)) --}}
          <div class="col-6 col-lg-3"><a href="{{route('viewgames.show', $justIn->id)}}"><img src="{{$justIn->image}}" alt="" class="hotItems img-fluid"></a><br>Price £{{$justIn->price}}<br><br><a href="{{route('viewgames.show', $justIn->id)}}" class="btn btn-primary" role="button">View Item</a></div>
        {{-- @else
          <div class="col-6 col-lg-3"><img src="{{$justIn->image}}" alt="" class="hotItems img-fluid"><br>Price £{{$justIn->price}}<br><br><a href="{{ route('games.addToCart', ['id' => $justIn->id]) }}" class="btn btn-success" role="button">Add to Basket</a></div>
        @endif --}}
      @endforeach
    </div>
