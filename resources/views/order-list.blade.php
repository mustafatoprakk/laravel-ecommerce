@extends("master")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h4>Order</h4>
            @foreach ($orders as $order )
            <div class="row mb-5 mt-5">
                <div class="col-md-8 offset-md-2 ">
                    <div class="border-bottom pb-3">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $order->image }}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="">Name: {{ $order->name }}</h5>
                                            <p class="card-text">Price: {{ $order->price }}</p>
                                            <p class="card-text">Delivery Status: {{ $order->status }}</p>
                                            <p class="card-text">Address: {{ $order->address }}</p>
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