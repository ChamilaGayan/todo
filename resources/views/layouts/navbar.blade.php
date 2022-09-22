<nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="{{ route('home') }}"><h1 class="text-light">Blog</h1></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

          @guest
                @if (Route::has('login'))
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-light w-md-25 w-50 w-lg-100" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
{{--
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-light w-md-25 w-50 w-lg-100" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('blog') }}">Blogs</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('item') }}">Item</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('contact') }}">contact</a></li>
                <div class="ms-7">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="nav-link btn btn-light text-black" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            @endguest
        </ul>


      </div>
    </div>
  </nav>
