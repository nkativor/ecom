<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
class PayPalController extends Controller
{
  public function getExpressCheckout(){

  $cart = \Cart::session(auth()->user()->id);

  $cartItems = array_map(function($item){
   return [
     'name' => $item['name'],
      'price' => $item['price'],
     'qty' =>  $item['quantity'],
   ];
   },$cart->getContent()->toarray());


       $checkoutData = [
        'items' => $cartItems,
        'return_url'=> route('paypal.success'),
        'cancel_url'=> route('paypal.cancel'),
        'invoice_id' => uniqid(),
        'invoice_description' => "order description",
        'total' => $cart->getTotal(),
        ];


      $provider = new ExpressCheckout();
      $response = \PayPal::setProvider($checkoutData);


}
    public function cancelPage()
    {
        dd('Sorry you payment is canceled');
    }

    public function getExpressCheckoutSuccess(Request $request)
    {
        $token = $request->get('token');
        $payerID = $request->get('payerID');
        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
          //perform transaction on PayPal
          $payment_status = $provider->doExpressCheckoutPayment($checkoutData,$token,$payerID);
          $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            dd('Your payment was successful. You can create success page here.');
        }

        dd('Something is wrong.');
    }


}
