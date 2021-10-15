@extends('layouts.app')

@section('content')
<div class="container text-center">
      <div class="">
      <div class="">
        <div class="card">
        <div class="card-header">
           <h3>Cart</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach($cartItems as $item)
              <tr>
                <td>{{$item->name}}</td>
                <td>
                  {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                </td>
                <td>
                  <form class="" action="{{ route('cart.update',$item->id) }}">
                    <input type="number" name="quantity" value={{$item->quantity}}>
                    <button type="submit" class="btn btn-primary">save</button>
                  </form>
                </td>
                <td>
                  <a href="{{ route('cart.destroy',$item->id)}}">
                    <button type="button"class="btn btn-danger">remove</button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>

    </div>
</div>
<div class="py-4 row">
  <h4 style="margin-left:25px">
    Total Price:GH {{Cart::session(auth()->user()->id)->getTotal()}}
  </h4>
  <a href="{{ route('cart.checkout') }}" style="margin-left:560px;padding-bottom:4px">
  <button type="button" name="button" class="btn btn-primary">Proceed to Checkout</button>
  </a>
</div>

@endsection
