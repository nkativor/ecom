<?php

namespace App\Http\Controllers;
//use Darryldecode\cart\cart;
use Illuminate\Http\Request;
use App\product;
class CartController extends Controller
{
    //
    public function add(Product $product){
      // add the product to cart
  \Cart::session(auth()->user()->id)->add(array(
    'id' =>$product->id,
    'name' => $product->name,
    'price' => $product->price,
    'quantity' => 1,
    'attributes' => array(),
    'associatedModel' => $product
  ));
   return redirect()->route('cart.index');
    }

    public function index(){
      $cartItems = \Cart::session(auth()->user()->id)->getContent();
      return view('cart.index',compact('cartItems'));
    }

    public function destroy($itemId){
         \Cart::session(auth()->user()->id)->remove($itemId);
          return back();
    }

    public function update($itemId){
         \Cart::session(auth()->user()->id)->update($itemId,[
           'quantity' => array(
           'relative' => false,
           'value' => request('quantity')
           ),
         ]);
          return back();
    }

    public function checkout(){
      return view('cart.checkout');
    }
}
