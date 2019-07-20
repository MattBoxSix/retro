
    <div id="contact">
      <h2 class="footer mainHeaders">CONTACT</h2><br>
      <div class="row">
        <div class="col-sm-5">
          <p>Have a question? We’re here to help. Send us a message and we’ll be in touch. </p>
            <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="250" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=%20DE12AZ&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.maps-erstellen.de"></a></div><style>.mapouter{position:relative;text-align:right;height:250px;width:250px;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:250px;}</style></div> -->
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="mobile" placeholder="Contact Number" type="text" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-primary pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
        <footer class="footer" id="contact">
          <div class="row">
            <div class="col-12 col-lg-4">
              <p class="font-weight-bold"><u>Contact</u></p>
              <p><i class="fas fa-phone"></i> 0773 05086858</p><p><i class="far fa-envelope"></i> retroworlds@gmail.com</p>
              <a class="nav-link" href="https://www.facebook.com/OnlineRetroGames/" target="_blank"> <i class="fab fa-facebook-square fa-2x" style="color: #3C5A99;"></i> Find Us on Facebook</a>
            </div>
            <div class="col-12 col-lg-4">
              <p class="font-weight-bold"><u>Legal</u></p>
              <p><a href="{{ route('privacy.index')}}">Privacy Policy</a></p>
              <p><a href="{{ route('cookies.index')}}">Cookie Policy</a></p>
              <p><a href="{{ route('terms.index')}}">Terms & Conditions</a></p>
            </div>
            <div class="col-12 col-lg-4">
              <p class="font-weight-bold"><u>Address</u></p>
              <p>Retro World - Mrs Jane Tiochta (3/4/1398)</p>
              <p>C/O NMTF</p>
              <p>Hampton House</p>
              <p>Hoyland, Barnsley</p>
              <p>S740HA</p>
            </div>


          </div>
          <img src="/images/paypal.png" alt="" class="img-fluid" style="width: 20%">
        </footer>
      </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
