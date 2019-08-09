
    <div id="contact">
      <h2 class="footer mainHeaders">CONTACT</h2><br>
      <div class="row">
        <div class="col-sm-5">
          <p>Have a question? We’re here to help. Send us a message and we’ll be in touch. </p>

        </div>
        <div class="col-sm-7 slideanim">
          @if(Session::has('success'))
       <div class="alert alert-success">
         {{ Session::get('success') }}
       </div>
        @endif
        {!! Form::open(['route'=>'contactus.store']) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
          <span class="text-danger">{{ $errors->first('name') }}</span>
          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
          </div>
        </div>
        <div class="form-group {{ $errors->has('number') ? 'has-error' : '' }}">
          {!! Form::text('number', old('number'), ['class'=>'form-control', 'placeholder'=>'Enter Number']) !!}
        <span class="text-danger">{{ $errors->first('number') }}</span>
        </div>
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
          {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'rows'=>4, 'placeholder'=>'Enter Message']) !!}
        <span class="text-danger">{{ $errors->first('message') }}</span>
        </div>
        <div class="form-group">
        <button class="btn btn-success">Contact US!</button>
        </div>
        {!! Form::close() !!}
        </div>
        </div>
      </div>
        <footer class="footer" id="contact">
          <br>
          <div class="row">
            <div class="col-2 offset-2"><a href="{{ route('privacy.index')}}">Privacy Policy</a></div>
            <div class="col-2"><a href="{{ route('cookies.index')}}">Cookie Policy</a></div>
            <div class="col-2"><a href="{{ route('terms.index')}}">Terms & Conditions</a></div>
            <div class="col-2"><a href="{{ route('faq.index')}}">FAQ</a></div>
          </div>
          <br>
          <div class="row">
            <div class="col-10 offset-1">
              Retro World - Mrs Jane Tiochta (3/4/1398), c/o NMTF, Hampton House, Hoyland, Barnsley, S740HA,
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-3">
                      <i class="fas fa-phone"></i> <a href="tel:+4477305086858">077305086858</a>
                      </div>
                      <div class="col-12 col-md-3">
                        <i class="far fa-envelope"></i> <a href="mailto:retroworlds@gmail.com">retroworlds@gmail.com</a>
                      </div>
                      <div class="col-12 col-md-3">
                         <a href="https://www.facebook.com/OnlineRetroGames/" target="_blank"> <i class="align-middle fab fa-facebook-square fa-2x" style="color: #3C5A99;"></i> Find Us on Facebook</a>
                      </div>
                      <div class="col-12 col-md-3">
                        <i class="fas fa-comment-dollar"></i> <a href="#myModal" data-toggle="modal" data-target="#myModal">Selling a game?</a>
                        </div>
                  </div>
                </div>
              </div>
              <img src="/images/paypal.png" alt="" class="img-fluid" style="width: 20%">
            </div>
          </div>

        </footer>
      </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
