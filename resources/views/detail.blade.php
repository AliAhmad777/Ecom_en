@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
             <img class="detail-img" src="{{ $product['gallery'] }}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{ $product['name'] }}</h2>
            <h3>Price : {{ $product['price'] }}$</h3>
            <h4>Details of {{ $product['name'] }} IS:<br> {{ $product['description'] }}</h4>
            <h4>Categoey : {{ $product['category'] }}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
              </svg>Add To Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection