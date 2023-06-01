<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="{{ route('frontend.index') }}">GIFY TECH</a>
    <span style="font-size: 2em; color: white;">
        <i class="fas fa-book-open"></i>
    </span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">

            <a class="nav-item nav-link " href="{{ route('frontend.index') }}" style="color: antiquewhite;">Home <span class="sr-only">(current)</span></a>
            @guest
                @if (Route::has('login'))
                <a class="nav-item nav-link" href="{{ route('login') }}" style="color: antiquewhite;">Login</a>
                @endif
                @if (Route::has('register'))
                <a class="nav-item nav-link" href="{{ route('register') }}" style="color: antiquewhite;">Register</a>
                @endif
            @else
            <a class="nav-item nav-link" href="{{ route('frontend.cart') }}" style = "color: antiquewhite";>My Cart</a>
            <a class="nav-item nav-link" href="{{ route('frontend.checkout') }}" style = "color: antiquewhite";>My Order</a>
            <a class="nav-item nav-link" style = "color: antiquewhite" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>
    </div>

</nav>
