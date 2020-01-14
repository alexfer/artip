@extends('web::index')
@section('title', $page['content']['short_title'])
@section('content')
<h2 class="title mb-3">{{ $page['content']['short_title'] }}</h2>
<div class="row">
    <div class="col-3">
        <div class="card mb-3">
            <div class="card-header">{{ $page['name'] }}</div>
            <div class="card-body h-100">
                @if(isset($categories[$page['id']]) && count($categories[$page['id']]['children']))
                <nav id="sidebar">
                    <ul class="list-unstyled" id="children">
                    @foreach($categories[$page['id']]['children'] as $child)
                    <li>
                        <a href="{{ route('single.by.slug', ['slug' => $child['slug']]) }}">{{ $child['name'] }}</a>
                    </li>
                    @endforeach
                    </ul>
                </nav>
                @endif
            </div>
        </div>
    </div>
    <div class="col-9">
        {!! $page['content']['content'] !!}
    </div>
</div>
@endsection
