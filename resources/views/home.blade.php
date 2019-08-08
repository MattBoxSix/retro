@extends('layouts.app')

@section('content')
  <!--title section-->

  <div class="row">
    <div class="col-lg-10 col-sm-12 offset-md-1 offset-sm-0">
      @include('includes/home/title')
      <!--end of title section-->

      <!--Nav section-->
      @include('includes/home/navbar')
      <!--end of Nav section-->

      <!--carousel section-->
      @include('includes/home/carousel')
      <!--end of carousel section-->

      <!--catalogue section-->
      @include('includes/home/catalogue')


      <!--end of catalogue section-->

      <!--Just in section-->
      @include('includes/home/justIn')
      <!--end of Just in section-->

      <!--recommend section-->
      @include('includes/home/recommend')
      <!--end of recommend section-->

      <!--reviews section-->
      @include('includes/home/reviews')
      <!--end of reviews section-->

      <!--contact and footer section-->
      @include('includes/home/footer')
      <!--end of contact and footer section-->
    </div>
  </div>
      @include('includes/home/modals')
@endsection
