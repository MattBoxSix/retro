<div class="mainHeaders font-weight-bold"><h2>Store</h2><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Have a game to sell? Click here! <img src="/images/pacman.png" alt="" style="width: 20px;"></a></div>
<div class="row" id="gamerow">
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/sega.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav" style="font-size: 0.8rem;">
          @foreach($segaCategories as $sega)
          <li><a href="{{route('games.show', $sega->id)}}">{{ucfirst($sega->name)}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/nintylogo.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav" style="font-size: 0.7rem;">
          @foreach($nintCategories as $nint)
          <li><a href="{{route('games.show', $nint->id)}}">{{ucfirst($nint->name)}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/pslogo.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav" style="font-size: 0.8rem;">
          @foreach($psCategories as $ps)
          <li><a href="{{route('games.show', $ps->id)}}">{{ucfirst($ps->name)}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/xboxlogo.png" alt="Avatar" class="image img-fluid max-width: 100%">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav" style="font-size: 1.2rem;">
          @foreach($xboxCategories as $xbox)
          <li><a href="{{route('games.show', $xbox->id)}}">{{ucfirst($xbox->name)}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/amigalogo.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($amigaCategories as $amiga)
          <li><a href="{{route('games.show', $amiga->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/atarilogo.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($atariCategories as $atari)
          <li><a href="{{route('games.show', $atari->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row" id="gamerow">
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <p class="eightBit">Merchandise</p>
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($bitCategories as $bit)
          <li><a href="{{route('games.show', $bit->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/3do.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($doCategories as $do)
          <li><a href="{{route('games.show', $do->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/cdi.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($cdiCategories as $cdi)
          <li><a href="{{route('games.show', $cdi->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/neo.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($neoCategories as $neo)
          <li><a href="{{route('games.show', $neo->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <img src="/images/logos/pcengine.png" alt="Avatar" class="image img-fluid">
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($pcEngineCategories as $pcEngine)
          <li><a href="{{route('games.show', $pcEngine->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-4 col-lg-2 gamesCategories">
  <div class="container">
    <p class="import">Imports and other consoles</p>
    <div class="overlay">
      <div class="text">
        <ul class="navbar-nav">
          @foreach($importCategories as $import)
          <li><a href="{{route('games.show', $import->id)}}">All&nbspGames</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
