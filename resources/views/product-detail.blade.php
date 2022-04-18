@extends("master")
@section("content")


<div class="">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="{{ $product->image }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-5">
                                <a href="{{ route('home-page') }}">Go Back</a>
                                <h2 class="">Name: {{ $product->name }}</h2>
                                <h3 class="">Price: {{ $product->price }}</h3>
                                <h4 class="">Description: {{ $product->description }}</h4>
                                <h4 class="">Category: {{ $product->category }}</h4>
                                <form action="{{ route('add-to-cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-primary mt-3">Add to Cart</button>
                                </form>
                                <button type="submit" class="btn btn-success mt-3">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection