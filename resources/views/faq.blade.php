@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-lg-10 col-sm-12 offset-md-1 offset-sm-0">
  @include('includes/home/title')
  <!--end of title section-->

  <!--Nav section-->
  @include('includes/home/navbar')
  <h1><p class="font-bold text-center mainHeaders"><u>Frequently Asked Questions</u></p></h1>
  Here you'll find most of the answers to the most common questions regarding ordering, returns and other general enquiries. If you have any other enquiries, please contact us
<div class="container">
  <div class="panel-group" id="accordion"><br>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse1">How much will postage be?</a>
        </h4>
      </div>
      <div id="collapse1" class="collapse" data-parent="#accordion">

        <div class="panel-body">Postage in the U.K. is £1.99 for each item that’s priced under £25. Postage is FREE if you spend over £25.<br><br>
        Please contact us for details of postage costs if you are an International customer
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse2">How long will I have to wait before my items are dispatched?</a>
        </h4>
      </div>
      <div id="collapse2" class="collapse" data-parent="#accordion">
        <div class="panel-body">We will do our best to get it delivered the same working day or the next working day. Any items ordered on a Saturday or Sunday will be sent Monday. All items under £25 will be sent 1st class. Any item or items over £25 will be sent 1st class recorded delivery.
      </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse3">How do you package the items I buy?</a>
        </h4>
      </div>
      <div id="collapse3" class="collapse" data-parent="#accordion">
        <div class="panel-body">All the items will be sent very well packed. If it is a game console it will be sent bubble wrapped and in a protective box.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse4">I am an international buyer, is this a problem?</a>
        </h4>
      </div>
      <div id="collapse4" class="collapse" data-parent="#accordion">
        <div class="panel-body">We send out Worldwide. If you contact us we can tell you the postage rate for your item.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse5">What payment methods do you take?</a>
        </h4>
      </div>
      <div id="collapse5" class="collapse" data-parent="#accordion">
        <div class="panel-body">We prefer and accept PayPal, or we can accept payment by Bank Transfer, please enquire if you wish to pay by Bank Transfer.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse6">Are your games new or second hand?</a>
        </h4>
      </div>
      <div id="collapse6" class="collapse" data-parent="#accordion">
        <div class="panel-body">Most of our games and consoles we stock are second hand; some are unboxed, and some come with their original boxes and instructions. Sometimes we get sealed brand-new games in stock and this will be stated.
    </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse7">My items have arrived and are damaged or faulty. What do I do?</a>
        </h4>
      </div>
      <div id="collapse7" class="collapse" data-parent="#accordion">
        <div class="panel-body">All items sold by Retro World are tested thoroughly before being dispatched, but in the unlikely event of something arriving faulty, the item may be returned for a replacement but please first contact us.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse8">Do you provide any warranty on items sold?</a>
        </h4>
      </div>
      <div id="collapse8" class="collapse" data-parent="#accordion">
        <div class="panel-body">All items sold by Retro World come with a one-month warranty and are thoroughly tested and cleaned before being put on sale. After this time, we will try to help you with any problems where possible.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse9">Can I see actual photos of the items?</a>
        </h4>
      </div>
      <div id="collapse9" class="collapse" data-parent="#accordion">
        <div class="panel-body">Most items are of stock images but just ask and we can send you any additional photos by Email retroworlds@gmail.com or WhatsApp us on 07305086858.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse10">I have seen an item cheaper somewhere else, why is this?</a>
        </h4>
      </div>
      <div id="collapse10" class="collapse" data-parent="#accordion">
        <div class="panel-body">You may find it at a cheaper price however all the games and consoles we sell are in very good condition. The games and consoles that are boxed are in original boxes and if there are game instructions, they will also be original. All our games and consoles are cleaned and thoroughly tested before being put for sale. Some of our stock is in Mint collectors’ condition and will be priced higher.</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse11">Can I have my order sent to another address?</a>
        </h4>
      </div>
      <div id="collapse11" class="collapse" data-parent="#accordion">
        <div class="panel-body">We can only send your order out to your registered PayPal address.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse12">How do you rate your game condition?</a>
        </h4>
      </div>
      <div id="collapse12" class="collapse" data-parent="#accordion">
        <div class="panel-body"><ul>
          <li>1-3/10 -Very poor condition-boxes will be torn and ripped.</li>
          <li>3-5 /10- Poor to acceptable condition.</li>
          <li>6-7/10 - Average condition - boxes may be ripped, torn or have scuff marks on them.</li>
          <li>7/10 - Good overall condition with light to medium wear on boxes.</li>
          <li>8/10- Very good condition-hardly any wear.</li>
          <li>9/10- Near Mint collectors’ condition.</li>
          <li>10/10 – Pristine Mint collectors’ condition.</li>
        </ul>
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse13">My items are not what I expected; can I return it?</a>
        </h4>
      </div>
      <div id="collapse13" class="collapse" data-parent="#accordion">
        <div class="panel-body">All items are described as accurately as possible on the website. Please make any enquiries you have about our item before purchasing them. If you have bought items that are not compatible with your own console, we will exchange them for items of equal value of your choice, but we do not provide refunds for items bought in error
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header faqCenter">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse14">How do I know that my details are safe with you?</a>
        </h4>
      </div>
      <div id="collapse14" class="collapse" data-parent="#accordion">
        <div class="panel-body">Retro World assures all buyers that their details will be held in the strictest confidence. We will not pass your E-Mail address or any other information onto any third parties. Please view our privacy policy for more information.
</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
