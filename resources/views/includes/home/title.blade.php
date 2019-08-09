<div class="row">

  <div class="col-lg-6 col-xs-12 d-flex justify-content-center justify-content-md-start"><h1 class="display-4 retro">RETR<span style="color:yellow">O</span> W<span style="color:yellow">O</span>RLD</h1></div>
  <div class="col-lg-4 deltext d-flex justify-content-center"><p>Free delivery if you spend £25</p></div>
  <div class="col-lg-2 d-flex justify-content-center">
    <div class="d-flex align-items-center">
      <div class="btn-group loginButtons">
        @if (Auth::guest())
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal">Sign Up</button>
      @elseif (Auth::user()->isAdmin())
            <a href="{{route('admin.index')}}" class="btn btn-success" role="button">Admin</a>
        @endif
        @if (Auth::check())
            <a href="{{url('/logout')}}" class="btn btn-success" role="button">Logout</a>
          @endif
      </div>
    </div>
  </div>
</div>
@foreach($holidayMessage as $hMessage)
<div class="alert alert-danger text-center" role="alert">
  {{$hMessage->message}}
</div>
@endforeach
