@extends('web::index')
@section('title', isset($page['content']['short_title']) ? $page['content']['short_title'] : $page['name'])
@section('content')
<h2 class="title mb-3">{{ isset($page['content']['short_title']) ? $page['content']['short_title'] : $page['name'] }}</h2>
<div class="row h-100">
    @if(count($children))
    <div class="col-3">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $page['name'] }}</h5>
                <hr class="my-1">
                <nav id="sidebar" class="h-100">
                    <ul class="list-unstyled">
                    @foreach($children as $child)
                        @include('web::single-pages.partial', $child)
                    @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-2">
            @include('web::widgets.list-news', ['news' => $news])
        </div>
    </div>
    @endif
    <div class="col-9{{ !$page['content']['content'] ? ' coming-soon' : null }}">
        @if($page['content']['content'])
            {!! $page['content']['content'] !!}
        @else
            @include('web::single-pages.coming-soon')
        @endif
    </div>
</div>
@endsection