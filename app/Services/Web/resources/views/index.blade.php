<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Artip - @yield('title')</title>
        <link rel="canonical" href="{{ env('APP_URL') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @yield('custom-css')
        <link href="{{ asset('css/common.css') }}" rel="stylesheet" />
    </head>
    <body>
        <header class="container header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-12 text-center">
                    <a class="header-logo text-dark" href="{{ route('index') }}">{{ _i('ARTIP') }}</a>
                </div>
            </div>
        </header>
        <div class="container nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between navbar-nav-scroll">
                @foreach($categories as $category)
                @if(!$category['parent_id'])
                <a class="p-2 text-muted" href="{{ route('single.by.slug', ['slug' => $category['slug']]) }}">{{ $category['name'] }}</a>
                @endif
                @endforeach
                <a class="p-2 text-muted" href="{{ route('contacts') }}">{{ _i('Contacts') }}</a>
            </nav>
        </div>
        <section class="container" style="min-height: 100vh;">
            @if ($__env->yieldContent('content'))
            @yield('content')
            @endif
            @include('web::widgets.submission-form')
        </section>
        @include('web::footer')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @yield('common-js')
    </body>
</html>
