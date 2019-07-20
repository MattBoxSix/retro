@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-lg-10 col-sm-12 offset-md-1 offset-sm-0">
  @include('includes/home/title')
  <!--end of title section-->

  <!--Nav section-->
  @include('includes/home/navbar')
  <br>
<h3 class="font-weight-bold text-center"><u>Terms And Conditions</u></h3>
In this document the following words shall have the following meanings:<br>
 - "Consumer" shall have the meaning ascribed in section 12 of the Unfair Contract Terms Act 1977;<br>
 - "Customer" means any person who purchases Goods and Services from the Supplier;<br>
 - "Goods" means the articles specified in the Proposal;<br>
 - "Proposal" means a statement of work, a payment option as so described on the supplier’s website, a quotation or other similar document describing the Goods and Services to be provided by the Supplier;<br>
 - "Services" means the services specified in the Proposal;<br>
 - "Supplier" means Retro World- Mrs Jane Tiochta ( 3 / 4/ 1398 ) C/0 NMTF Hampton House ,Hawshaw Lane,Hoyland,Barnsley,S74OHA,United Kingdom.<br>
 - "Terms and Conditions" means the terms and conditions of supply set out in this document and any special terms and conditions agreed in writing by the Supplier.

<div class="container">
  <div class="panel-group" id="accordion"><br>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse1">General</a>
        </h4>
      </div>
      <div id="collapse1" class="collapse" data-parent="#accordion">

        <div class="panel-body">These Terms and Conditions shall apply to all contracts for the supply of Goods and Services by the Supplier to the Customer and shall prevail over any other documentation or communication from the Customer.<br><br>
        Any variation to these Terms and Conditions shall be inapplicable unless agreed in writing by the Supplier.<br><br>
        Nothing in these Terms and Conditions shall prejudice any condition or warranty, express or implied, or any legal remedy to which the Supplier may be entitled in relation to the Goods and Services, by virtue of any statute, law or regulation.<br><br>
        Nothing in these Terms and Conditions shall affect the Customer's statutory rights as a Consumer.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse2">The customers order</a>
        </h4>
      </div>
      <div id="collapse2" class="collapse" data-parent="#accordion">
        <div class="panel-body">The Proposal issued to the Customer following the placement of an order, shall remain valid for a period of seven days. If the Supplier does not receive payment within this period, it will be assumed that the order is no longer required.<br><br>
        The Customer shall be deemed to have accepted the Terms and Conditions by placing an order with the Supplier.<br><br>
        The Customer shall be deemed to have accepted the Proposal by making payment to the Supplier.
      </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse3">Price and Payment</a>
        </h4>
      </div>
      <div id="collapse3" class="collapse" data-parent="#accordion">
        <div class="panel-body">The price for the Goods and Services is as specified in the Proposal and is inclusive of VAT and any applicable charges outlined in the Proposal.<br><br>
        Payment of the price shall be in the manner specified in the Proposal.<br><br>
        No work will begin on the production of the Goods and Services until full payment and all additional information, requested by the Supplier, has been received.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse4">Delivery</a>
        </h4>
      </div>
      <div id="collapse4" class="collapse" data-parent="#accordion">
        <div class="panel-body">The date of delivery specified by the Supplier is an estimate only. Time for delivery shall not be of the essence of the contract and the Supplier shall not be liable for any loss, costs, damages, charges or expenses caused directly by any delay in the delivery of the Goods and Services.<br><br>
        All risks in the Goods and Services shall pass to the Customer upon delivery.<br><br>
        Completed orders will only be dispatched on receipt of full payment.<br><br>
        The Customer should allow 7 working days from the date of dispatch for any Goods and Services to arrive in the UK. If this time has passed the Customer has not received the Goods and Services, they should contact their local Post Office to ensure that the delivery is not being held for them. If the Post Office confirm that no delivery is being held for them, then the Supplier will arrange a replacement, providing they are informed of the non delivery within forty days of the dispatch date.<br><br>
        The Supplier cannot accept liability for late delivery.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse5">Title</a>
        </h4>
      </div>
      <div id="collapse5" class="collapse" data-parent="#accordion">
        <div class="panel-body">Title in the Goods and Services shall not pass to the Customer until the Supplier has been paid in full for the Goods and Services.</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse6">Customer's Obligations</a>
        </h4>
      </div>
      <div id="collapse6" class="collapse" data-parent="#accordion">
        <div class="panel-body">To enable the Supplier to perform its obligations the Customer shall:
      co-operate with the supplier;<br><br>
      provide the Supplier with any information reasonably required by the Supplier;<br><br>
      comply with such other requirements as may be set out in the Proposal or otherwise agreed between the parties.
    </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse7">Supplier's Obligations</a>
        </h4>
      </div>
      <div id="collapse7" class="collapse" data-parent="#accordion">
        <div class="panel-body">The Supplier warrants that the Goods and Services will at the time of delivery correspond to the description given by the Supplier.<br><br>
        The Supplier will perform the Services with reasonable skill and care and to a reasonable standard in accordance with recognised standards and codes of practice.<br><br>
        The Supplier accepts all responsibility for the condition of tools and equipment used in the performance of the Services and shall ensure that any materials supplied shall be free of defects.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse8">Cancellations, Refunds and Changes to Orders</a>
        </h4>
      </div>
      <div id="collapse8" class="collapse" data-parent="#accordion">
        <div class="panel-body">The Customer can cancel an order at any time up until payment has been made. The cancellation can be made by email, or post.<br><br>
        Where the Goods are faulty or do not comply with any of the contract, the Customer must notify the Supplier within 3 days of delivery and the Customer shall be entitled to replacement Goods or if none available, a full refund.<br><br>
        The supplier reserves the right to terminate a contract due to offensive behaviour from a Customer. Offensive behaviour is defined as aggressive or abusive behaviour towards staff.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse9">Limitation of liability</a>
        </h4>
      </div>
      <div id="collapse9" class="collapse" data-parent="#accordion">
        <div class="panel-body">The Supplier shall not be liable for any direct loss or damage suffered by the Customer howsoever caused, as a result of any negligence, breach of contract or otherwise in excess of the price for the Goods and Services.<br><br>
The Supplier shall not be liable under any circumstances to the Customer or any third party for any indirect or consequential loss of profit, consequential or other economic loss suffered by the Customer howsoever caused, as a result of negligence, breach of contract, misrepresentation or otherwise.<br><br>
For the avoidance of doubt, time shall not be of the essence and the Supplier shall incur no liability to the Customer in respect of any failure to complete the Services by any agreed completion date<br><br>
If any term or provision of these Terms and Conditions is held invalid, illegal or unenforceable for any reason by any court of competent jurisdiction such provision shall be severed and the remainder of the provisions hereof shall continue in full force and effect as if these Terms and Conditions had been agreed with the invalid, illegal or unenforceable provision eliminated.
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse10">Severance</a>
        </h4>
      </div>
      <div id="collapse10" class="collapse" data-parent="#accordion">
        <div class="panel-body">If any term or provision of these Terms and Conditions is held invalid, illegal or unenforceable for any reason by any court of competent jurisdiction such provision shall be severed and the remainder of the provisions hereof shall continue in full force and effect as if these Terms and Conditions had been agreed with the invalid, illegal or unenforceable provision eliminated.</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="panel-title">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapse11">Limitation of liability</a>
        </h4>
      </div>
      <div id="collapse11" class="collapse" data-parent="#accordion">
        <div class="panel-body">These Terms and Conditions shall be governed by and construed in accordance with the law of England and the parties hereby submit to the exclusive jurisdiction of the English courts.<br><br>
If you have any further questions about our terms & conditions, you should contact us.
</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
