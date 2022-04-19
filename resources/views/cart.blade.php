@extends("master")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h4>Cart</h4>
            <div class="row">
                @foreach ($products as $product )

                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('product-detail', $product->id) }}" class=""></a>
                        <img src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $product->name }}</h5>
                          <p class="card-text">{{ $product->price }}</p>
                          <p class="card-text">{{ $product->category }}</p>
                          <a href="#" class="btn btn-warning">Remove to Cart</a>
                        </div>
                      </div>
                </div>
                    
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection