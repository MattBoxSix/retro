@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-lg-10 col-sm-12 offset-md-1 offset-sm-0">
  @include('includes/home/title')
  <!--end of title section-->

  <!--Nav section-->
  @include('includes/home/navbar')
  <!--end of Nav section-->


  <!--contact and footer section-->

  <!--end of contact and footer section-->
<div class="row">
  <div class="col-lg-10 col-sm-12 offset-md-1 offset-sm-0 aboutUs"><br>
    <p class="font-weight-bold font-italic">Retro World... The best games shop in the world !</p>
    <p>Retro World has been buying and selling retro games and consoles in Derby Eagle market for over twenty years. We have built up an enviable reputation and customers travel from all over the country just to purchase our games. We are a husband and wife team who love retro gaming and collecting retro games. We have now relocated our business from Derby to Burton-on-Trent. You will find us at Burton Indoor market every Saturday with lots of retro goodies for sale. Stock changes all the time so we have different games and consoles every week.</p>
    <p>We have a huge game and console stock of all the popular games, and we get rare collectors condition games in. We are always interested  buying your unwanted games and consoles. Please look at our selling enquiry page.</p>
    Get in touch by email <a href="mailto:retroworlds@gmail.com">retroworlds@gmail.com</a> or WhatsApp us on Number <a href="tel:07305086858">07305086858</a>.Or you can message us on our Facebook page.

    <hr>
  </div>

</div>
<div class="row">
  <div class="col-lg-4 col-sm-12 offset-md-0 offset-sm-0 aboutUs"><br><h2>We Buy...</h2><br><p>We'll give you the best price for your unwanted games and consoles. Let someone else experience the joy of the games you've already finished.</p></div>
  <div class="col-lg-4 col-sm-12 offset-md-0 offset-sm-0 aboutUs"><br><h2>We Sell...</h2><br><p>All of our games and consoles are tested and come with a full guarantee. We have a huge selection of rare, collectible games along with all the of old favourites you know and love.</p></div>
  <div class="col-lg-4 col-sm-12 offset-md-0 offset-sm-0 aboutUs"><br><h2>We Trade...</h2><br><p>Trade in your old games and consoles. Our stock changes all the time. Give us a call or pop in for a visit and see what new games we have!</p></div>
</div>
<div class="row">
  <div class="col-lg-12 col-sm-12 aboutUs">
    <h2 class="mainHeaders">What Our Customers Say</h2>
    <div id="customerCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <blockquote class="blockquote">
            <p>Retro World always has a big selection of Megadrive games and all at reasonable prices.</p>
            <footer class="blockquote-footer">Mike T.</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <p>I love this place! I always seem to find something to buy!</p>
            <footer class="blockquote-footer">Shannon W.</footer>
          </blockquote>
        </div>
      </div><br>
      <a class="carousel-control-prev" href="#customerCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customerCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-lg-6 aboutUs">
    <h3>Inside Out</h3>
    <p>Retro World was shown on a recent episode of the BBC 1 programme Inside Out in a feature on retro gaming. Our business was chosen as we have been trading in the Eagle Market for over twenty years selling and buying retro consoles and games. When we first started out our games were of course current and turned retro later. Check out our interview.</p>
  </div>
  <div class="col-12 col-lg-6 aboutUs">
    <iframe width="400" height="350" src="https://www.youtube.com/embed/Fastqiw7lBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<div class="row">
  <div class="col-12 col-lg-6 aboutUs">
    <h3>Adam Koralik</h3>
    <p>Adam came all the way from the US of A to come see us! Here is what he had to say:</p>
    <blockquote class="blockquote">
      <p>I visited an awesome store in Derby, England, UK called Retro World. Please, check out their Facebook page and check out the store itself if you're ever in the area. I also talk about my experience there, as well as pickups.</p>
      <footer><a href="https://www.youtube.com/channel/UCFTfkdN3L4aLdryeADiSsIg">Adam Koralik</a></footer>
    </blockquote class="blockquote-footer">

  </div>
  <div class="col-12 col-lg-6 aboutUs">
    <iframe width="400" height="350" src="https://www.youtube.com/embed/pBasJmsd4t4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
  @include('includes/home/footer')
</div>
</div>


@endsection
