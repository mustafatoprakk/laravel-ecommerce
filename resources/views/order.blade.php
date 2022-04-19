@extends("master")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4" style="margin-top: 6%">
            <form action="{{ route('order-place') }}" method="post">
                @csrf
                <div class="card shadow p-3 mb-3 bg-body rounded">
                    <div class="card-body">
                        <h4 class="card-title fw-bold text-center">Order Summary</h4>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-monospace">Subtotal</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-monospace float-end">
                                            {{ $total }} TL
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-monospace">Delivery</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-monospace float-end">
                                            12 TL
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-monospace">Total</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-monospace float-end">
                                            {{ $total + 12 }} TL
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address" required></textarea>
                        </div>
                        <div class="form-check">
                            <input name="payment" value="cash" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Online payment
                            </label>
                        </div>
                        <div class="form-check border-bottom pb-4">
                            <input name="payment" value="cash" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Payment on Delivery
                            </label>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-success">Complete the Order</button>                        
                        </div>
                        <div class="mt-3 text-center">
                            <a href="{{ route('cartList') }}" class="text-decoration-none">Product Detail</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection