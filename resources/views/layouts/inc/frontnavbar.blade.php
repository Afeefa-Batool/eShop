<nav class="navbar navbar-expand-lg sticky-top navbar-light shadow bg-white">
  <div class="container">
    <a class="navbar-brand text-bold" href="{{ url('/')}}">Jewelery Palace</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse justify-content-end search-bar">
      <form action="{{ url('searchproduct')}}" method="POST"  class="navbar-form">
        @csrf
        <div class="input-group no-border">
          <input type="search" id="search_product" name="product_name" required class="form-control" placeholder="Search...">
          <button type="submit" class="btn btn-default btn-round btn-just-icon">
            <span class="badge bg-secondary"><i class="fa fa-2x fa-search"></i></span>
          </button>
        </div>
      </form>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('category') }}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart 
            <span class="badge rounded-pill bg-secondary cart-count">0</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('wishlist') }}"><i class="fa-solid fa-heart"></i> Wishlist 
            <span class="badge rounded-pill bg-secondary wishlist-count">0</span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li> --}}

        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a href="{{ url('my-orders') }}" class="dropdown-item">
              My Orders
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest

      </ul>
    </div>
  </div>
</nav>