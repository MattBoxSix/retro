<div class=" mainHeaders font-weight-bold"><h2>Retro World Recommends</h2></div>
<div class="row">
  @foreach($gameRecommends as $Recommends)
    @if($cart->contains($Recommends->id))
    <div class="col-6 col-lg-3"><img src="{{$Recommends->image}}" alt="" class="hotItems img-fluid"><br>Price £{{$Recommends->price}}<br><br><a href="#" class="btn btn-primary" role="button">Added!</a></div>
  @else
    <div class="col-6 col-lg-3"><img src="{{$Recommends->image}}" alt="" class="hotItems img-fluid"><br>Price £{{$Recommends->price}}<br><br><a href="{{ route('games.addToCart', ['id' => $Recommends->id]) }}" class="btn btn-success" role="button">Add to Basket</a></div>
  @endif
  @endforeach
</div>
