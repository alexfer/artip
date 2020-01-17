<!doctype html>
<html lang="{{ LaravelGettext::getLocaleLanguage() }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ _i('Admin Dashboard') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        @yield('custom-css')
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('dashboard') }}">Artip Admin Control Panel</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="{{ _i('Search') }}" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ _i('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ !Request::segment(2) ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                    <span data-feather="home"></span>
                                    {{ _i('Dashboard') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) == 'categories' || Request::segment(2) == 'category' ? 'active' : '' }}" href="{{ route('category.collection') }}">
                                    <span data-feather="menu"></span>
                                    {{ _i('Categories') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) == 'content' ? 'active' : '' }}" href="{{ route('content.collection') }}">
                                    <span data-feather="book-open"></span>
                                    {{ _i('Content') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) == 'media' ? 'active' : '' }}" href="{{ route('media.collection') }}">
                                    <span data-feather="image"></span>
                                    {{ _i('Media') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) == 'users' || Request::segment(2) == 'user' ? 'active' : '' }}" href="{{ route('user.collection') }}">
                                    <span data-feather="users"></span>
                                    {{ _i('Users') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 mb-3">
                    @if ($__env->yieldContent('content'))
                    @yield('content')
                    @endif
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        @yield('custom-scripts')
        <script>
            feather.replace();
        </script>
    </body>
</html>