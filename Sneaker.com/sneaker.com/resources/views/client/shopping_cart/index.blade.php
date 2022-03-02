@extends('client.layout.index')

@section('content')
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="list-cart">
                    @include('client.shopping_cart.list-cart')
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
