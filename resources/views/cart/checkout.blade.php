@extends('layouts.app')

@section('content')
<div class="container text-center">
     <div class="col-md-12">
       <div class="text-center">
         <h2>Checkout Form</h2>
       </div>
       <div class="card">
         <div class="card-body">
           <div class="">
             <form class="" action="{{ route('orders.store') }}" method="post">
               @csrf
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">ShippingFullname</label>
                   <input type="text" name="shipping_fullname" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">Shipping Full Address</label>
                   <input type="text" name="shipping_address" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">ShippingCity</label>
                   <input type="text" name="shipping_city" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">ShippingState</label>
                   <input type="text" name="shipping_state" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">ShippingZipcode</label>
                   <input type="text" name="shipping_zipcode" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">ShippingPhone</label>
                   <input type="text" name="shipping_phone" value="" class="form-control">
                 </div>
               </div>
               <p style="border:1px solid black;background-color:black;color:white">(Optional)</p>

               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">Billing-Fullname</label>
                   <input type="text" name="billing_fullname" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">BillingFullAddress</label>
                   <input type="text" name="billing_address" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">BillingCity</label>
                   <input type="text" name="billing_city" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">BillingState</label>
                   <input type="text" name="billing_state" value="" class="form-control">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">BillingZipcode</label>
                   <input type="text" name="billing_zipcode" value="" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">BillingPhone</label>
                   <input type="text" name="billing_phone" value="" class="form-control">
                 </div>
               </div>
               <hr>
               <h4>Payment Option</h4>
               <div class="row py-4">
                 <div class="input-form" style="margin-left:50px">
                   <label for="form-check-label">
                   <input type="radio" name="payment_method" value="cash_on_delivery" class="form-check-input">
                   Cash on Delivery
                   </label>
                 </div>

                 <div class="input-form" style="margin-left:150px">
                   <label for="form-check-label">
                   <input type="radio" name="payment_method" value="paypal" class="form-check-input">
                   Paypal
                   </label>
                 </div>

                 <div class="input-form" style="margin-left:150px">
                   <label for="form-check-label">
                   <input type="radio" name="payment_method" value="stripe" class="form-check-input">
                   Stripe
                   </label>
                 </div>

                 <div class="input-form" style="margin-left:150px">
                   <label for="form-check-label">
                   <input type="radio" name="payment_method" value="card" class="form-check-input">
                   Card
                   </label>
                 </div>
               </div>
               <hr>
                <div class="row py-6">
                  <div class="col-md-6">
                    <button type="submit" name="button" class="btn btn-primary" style="width:400px;margin-left:300px">Place Order</button>
                  </div>
                </div>

             </form>
           </div>
         </div>
       </div>
     </div>
</div>
@endsection
