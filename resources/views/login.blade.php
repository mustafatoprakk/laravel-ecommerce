@extends("master")
@section("content")

<div class="container c-login">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input name="email" id="email" class="form-control form-control-lg" type="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input name="password" id="password" class="form-control form-control-lg" type="password" placeholder="Password">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <p class="fw-normal my-3 text-center">Not a member? <a href="" class="text-decoration-none">Sign up</a></p>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection