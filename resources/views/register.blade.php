@extends("master")
@section("content")

<div class="container c-login">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input name="name" id="name" class="form-control form-control-lg" type="text" placeholder="User Name" required>
                        </div>
                        <div class="mb-3">
                            <input name="email" id="email" class="form-control form-control-lg" type="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input name="password" id="password" class="form-control form-control-lg" type="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input name="confirmPassword" id="confirmPassword" class="form-control form-control-lg" type="password" placeholder="Confirm Password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <p class="fw-normal my-3 text-center">I have a account <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection