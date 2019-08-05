<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Iceland|Nunito|Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/pacmanfav.png" type="image/x-icon"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>RetroWorld</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  </nav>
  <body>
    @include('cookieConsent::index')
    <div class="row">
      <div class="col-md-10 col-12 offset-md-1 offset-0">
        @include('includes/home/title')
        @include('includes/home/navbar')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 col-4 gamesSide">
              <ul>
                @foreach($doCategories as $do)
                <li><a href="{{route('games.show', $do->id)}}">{{ucfirst($do->name)}}</a></li>
                @endforeach
                @foreach($bitCategories as $bit)
                <li><a href="{{route('games.show', $bit->id)}}">{{ucfirst($bit->name)}}</a></li>
                @endforeach
                @foreach($amigaCategories as $amiga)
                <li><a href="{{route('games.show', $amiga->id)}}">{{ucfirst($amiga->name)}}</a></li>
                @endforeach
                @foreach($atariCategories as $atari)
                <li><a href="{{route('games.show', $atari->id)}}">{{ucfirst($atari->name)}}</a></li>
                @endforeach
                @foreach($cdiCategories as $cdi)
                <li><a href="{{route('games.show', $cdi->id)}}">{{ucfirst($cdi->name)}}</a></li>
                @endforeach
                @foreach($gawCategories as $gaw)
                <li><a href="{{route('games.show', $gaw->id)}}">{{ucfirst($gaw->name)}}</a></li>
                @endforeach
                @foreach($importCategories as $import)
                <li><a href="{{route('games.show', $import->id)}}">{{ucfirst($import->name)}}</a></li>
                @endforeach
                @foreach($neoCategories as $neo)
                <li><a href="{{route('games.show', $neo->id)}}">{{ucfirst($neo->name)}}</a></li>
                @endforeach
                <li>Nintendo</li>
                  <ul>
                    @foreach($nintCategories as $nint)
                    <li><a href="{{route('games.show', $nint->id)}}">{{ucfirst($nint->name)}}</a></li>
                    @endforeach
                  </ul>
                @foreach($pcCategories as $pc)
                <li><a href="{{route('games.show', $pc->id)}}">{{ucfirst($pc->name)}}</a></li>
                @endforeach
                @foreach($pcEngineCategories as $pcengine)
                <li><a href="{{route('games.show', $pcengine->id)}}">{{ucfirst($pcengine->name)}}</a></li>
                @endforeach
                <li>Playstation</li>
                  <ul>
                    @foreach($psCategories as $ps)
                    <li><a href="{{route('games.show', $ps->id)}}">{{ucfirst($ps->name)}}</a></li>
                    @endforeach
                  </ul>
                <li>Sega</li>
                  <ul>
                    @foreach($segaCategories as $sega)
                    <li><a href="{{route('games.show', $sega->id)}}">{{ucfirst($sega->name)}}</a></li>
                    @endforeach
                  </ul>
                <li>Xbox</li>
                <ul>
                  @foreach($xboxCategories as $xbox)
                  <li><a href="{{route('games.show', $xbox->id)}}">{{ucfirst($xbox->name)}}</a></li>
                  @endforeach
                </ul>
              </ul>
            </div>
            <div class="col-md-8 col-8">
              @yield('content')

            </div>
            <div class="d-none d-md-block col-md-2 gamesSide" style="text-align: center;">
              <br>
              <h2>Free Delivery if you spend over £25</h2>
            </div>
          </div>
        </div>
          @include('includes/home/footer')
          @include('includes/home/modals')
      </div>
    </div>
  </body>
@yield('script')
</html>
