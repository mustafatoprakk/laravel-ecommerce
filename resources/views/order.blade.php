@extends("master")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4" style="margin-top: 10%">
            <form action="" method="post">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Order Summary</h4>
                        <div class="row mt-4 border-bottom">
                            <div class="col-md-6">
                                <p class="font-monospace">Total</p>
                            </div>
                            <div class="col-md-6 float-end">
                                <p class="font-monospace">
                                    {{ $total }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">Complete the Order</button>                        
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('cartList') }}" class="text-decoration-none">Product Detail</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="email" class="form-control" id="emial" name="email" placeholder="name@example.com">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Online payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Payment on Delivery
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection