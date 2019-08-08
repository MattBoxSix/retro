<div class=" mainHeaders font-weight-bold"><h2>Retro World Recommends</h2></div>
<div class="row">
  @foreach($gameRecommends as $Recommends)
      <div class="col-6 col-lg-3"><a href="{{route('viewgames.show', $Recommends->id)}}"><img src="{{$Recommends->image}}" alt="" class="hotItems img-fluid"></a><br>Price £{{$Recommends->price}}<br><br><a href="{{route('viewgames.show', $Recommends->id)}}" class="btn btn-primary" role="button">View Item</a></div>
  @endforeach
</div>
