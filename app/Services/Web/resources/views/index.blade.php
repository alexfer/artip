<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ _i('ARTIP Header') }} - @yield('title')</title>
        <link rel="canonical" href="{{ env('APP_URL') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('custom-css')
        <link href="{{ asset('css/common.css') }}" rel="stylesheet" />
    </head>
    <body>
        <header class="container-fluid py-1">
            <div class="container">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4">
                        @if(isset($page) && isset($page['content']['translation']))
                        <div class="locale">
                            <a href="{{ route('single-translation.by.slug', ['locale' => $page['content']['translation']['locale'], 'slug' => $page['slug']]) }}">
                                <img src="{{ asset("images/{$page['content']['translation']['locale']}.png") }}">
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="col-4 text-right">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('index') }}" title="{{ _i('ARTIP Header') }}">
                                    <img src="{{ asset('images/logo.png') }}" class="header-logo" alt="{{ _i('ARTIP Header') }}">
                                </a>
                            </div>
                            <div class="col-6 text-white text-left">
                                {!! _i('ARTIP') !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-right">
                        @include('web::widgets.social', ['class' => 'social'])
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid stycki-bar bg-white box-shadow">
            <div class="container nav-scroller py-1">
                <nav class="nav d-flex justify-content-between">
                    @foreach($categories as $category)
                    @if(!$category['parent_id'])
                    <a class="p-2 text-black" href="{{ route('single.by.slug', ['slug' => $category['slug']]) }}">{{ $category['name'] }}</a>
                    @endif
                    @endforeach
                    <a class="py-2" href="{{ route('contacts') }}">{{ _i('Contacts') }}</a>
                </nav>
            </div>
        </div>
        @if(isset($slides ))
        <div class="container">
            @include('web::widgets.slides')
        </div>
        @endif
        <section class="container">
            @if ($__env->yieldContent('content'))
            @yield('content')
            @endif
            @include('web::widgets.submission-form')
        </section>
        @include('web::footer')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        @yield('common-js')
    </body>
</html>
