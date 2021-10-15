@extends('layouts.app')

@section('content')
<div class="container text-center">
     <h2>Products</h2>
      <div class="col-md-12">
          <div class="row">
        @foreach($products as $product)

          <div class="col-md-4">
            <div class="card">
          <img src="{{ asset('default-img.png') }}" alt="card image cap" class="card-img-top">
                <div class="card-header"> </div>
                <div class="card-body">
                  <h4 class="card-title">{{$product->name}}</h4>
                  <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">GH{{$product->price}}</p>
                </div>
                <div class="card-body">
                  <a href="{{ route('cart.add',$product->id) }}" class="card-link">Add to Cart</a>
                </div>
            </div>
          </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
