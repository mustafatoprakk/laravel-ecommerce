@extends("master")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h4>Cart</h4>
            <a href="{{ route('order-now') }}" class="btn btn-success float-end">Order Now</a>
            @foreach ($products as $product )
            <div class="row mb-5 mt-5">
                <div class="col-md-8 offset-md-2 ">
                    <div class="border-bottom pb-3">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('product-detail', $product->id) }}" class=""></a>
                                    <img src="{{ $product->image }}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="">{{ $product->name }}</h5>
                                            <p class="card-text">{{ $product->price }}</p>
                                            <p class="card-text">{{ $product->category }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mt-3">
                                                <a href="{{ route('remove-cart',$product->cart_id) }}" class="btn btn-warning">Remove to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection