<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <a class="navbar-brand" href="{{route('home.index')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('peripherals.index', 32)}}">Peripherals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('figures.index', 33)}}">Figures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('guides.index', 34)}}">Guides</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about.index')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('games.shoppingCart')}}">
          <i class="fas fa-shopping-basket"></i> Shopping Basket
          <span class="badge badge-success">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
      </li>
      </ul>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/OnlineRetroGames/" target="_blank">Find Us here: <i class="fab fa-facebook-square fa-2x" style="color: #3C5A99;"></i></a>
        </li>
      </ul>
    </ul>
    <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search Games..."> <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </span>
    </div>
</form>
  </div>
</nav>
