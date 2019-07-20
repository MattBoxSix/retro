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
    <img src="retro_images/store.jpg" alt="" class="img-fluid shopImage" style="width: 300px;">
    <p>Retro World has been buying and selling retro games and consoles in Derby Eagle market for the last 20 years. </p>
    <p>We are a husband and wife team who love retro gaming and collecting. We have built up an enviable reputation and customers have travelled from all over the country to purchase rare games and consoles from us.</p>
    <p>We have a huge game and console stock of all the popular games and rare collectors condition games and game collectables. Our stock changes daily and we have different game titles and consoles for sale. We sell and also buy games and consoles.</p>

   <p>Please take a look at our selling enquiry page. We attend Em Con conventions all around the country and we also trade at Burton indoor market on Saturdays. If you have any old games & consoles you want to sell then please take a look at our selling enquiry page or get in touch by email retroworlds@gmail.com or Whattsapp us on Number 07305 086858.</p>
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
    <p>Inside out recently covered us for one of their shows! Check out the video here to see what they had to say about us.</p>
  </div>
  <div class="col-12 col-lg-6 aboutUs">
    <iframe width="400" height="350" src="https://www.youtube.com/embed/geC54f8_BNA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
