<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-5 mt-3"
    style="max-width: 90%; margin: 0 auto; border-radius:20px;  ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('logo.png') }}" width="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="{{ route('home.page') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about.page') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.page') }}"
                        class="nav-link {{ request()->is('categories') ? 'active' : '' }}">
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('library.page') }}"
                        class="nav-link {{ request()->is('library') ? 'active' : '' }}">
                        Library
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.page') }}"
                        class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            @if (Auth::user()->role == 'admin')
                                <a href="{{ route('categories.index') }}" class="dropdown-item">Category</a>
                            @endif
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
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
