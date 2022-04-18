@extends("master")
@section("content")


<div class="costum-product">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $product )
                <div class="carousel-item {{ $product['id']==1 ? 'active' : '' }}">
                  <a href="{{ route('product-detail',$product->id) }}">
                    <img src="{{ $product->image }}" class="d-block w-100 slider-img" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $product->name }}</h5>
                    <p>{{ $product->description }}</p>
                  </div>
                  </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="trending-wrapper">
          <h3>Trending Products</h3>
          @foreach ($products as $product )
            <div class="trending-item">
              <a href="{{ route('product-detail',$product->id) }}">
                <img src="{{ $product->image }}" class="trending-image" alt="...">
                <div class="">
                  <h5>{{ $product->name }}</h5>
                </div>
              </a>
            </div>
          @endforeach
      </div>
</div>


@endsection