<?php
use App\Http\Controllers\ProductController;

$sumCartItem=0;
if(Session::has('user')){
  $sumCartItem=ProductController::cartItem();
}

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home-page') }}">Shopping</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home-page') }}">Home</a>
          </li>
          @if (Session::has("user"))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('order-list') }}">Orders</a>
          </li>
          @endif
          
        </ul>
        <form action="{{ route('search') }}" class="d-flex">
          <input name="search" id="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav mb-2 ms-2 mb-lg-0">
          
          @if (Session::has("user"))
          <li class="nav-item">
            <a class="nav-link fs-5" href="{{ route('cartList') }}"><i class="bi bi-cart-dash-fill"></i><span class="ps-1">{{ $sumCartItem }}</span></a>
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " style="margin-top: 3px" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Session::get("user")["name"] }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
          @else 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>