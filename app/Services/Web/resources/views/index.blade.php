<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Artip - @yield('title')</title>
        <link rel="canonical" href="{{ env('APP_URL') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/common.css') }}" rel="stylesheet" />        
    </head>
    <body>
        <main role="main" class="container">
            <header class="header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">                    
                    <div class="col-12 text-center">
                        <a class="header-logo text-dark" href="{{ env('APP_URL') }}">{{ _i('ARTIP') }}</a>
                    </div>                    
                </div>
            </header>
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between navbar-nav-scroll">
                    <a class="p-2 text-muted" href="#">{{ _i('For Entrants') }}</a>
                    <a class="p-2 text-muted" href="">{{ _i('For Students') }}</a>
                    <a class="p-2 text-muted" href="#">{{ _i('For Graduates') }}</a>
                    <a class="p-2 text-muted" href="#">{{ _i('Cooperation') }}</a>
                    <a class="p-2 text-muted" href="#">{{ _i('About As') }}</a>
                    <a class="p-2 text-muted" href="{{ route('contacts') }}">{{ _i('Contacts') }}</a>                                        
                </nav>
            </div>            
            @if ($__env->yieldContent('content'))
            @yield('content')                    
            @endif            
        </main>   
        <footer class="footer">
<<<<<<< HEAD
            <p>Nice <a href="https://artip.com.ua/">artip.edu.ua</a> by <a href="https://facebook.com">@facebook</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
=======
            <div class="container">
                <p>Nice <a href="https://artip.edu.ua/">artip.edu.ua</a> by <a href="https://facebook.com">@facebook</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </div>
>>>>>>> 68df3f4cfda65f1e304a95064094b860944cc54c
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    </body>
</html>
