@extends('web::index')
@section('title', $page['content']['short_title'])
@section('content')
<h2 class="title mb-3">{{ $page['content']['short_title'] }}</h2>
<div class="row">
    <div class="col-3">
        <div class="card mb-3">
            <div class="card-header">{{ $page['name'] }}</div>
            <div class="card-body h-100">
                @if(count($categories))
                <nav id="sidebar" class="m-0">
                    <ul class="list-unstyled">
                    @foreach($categories as $category)
                        @if($category['id'] == $page['id'])
                            @include('web::single-pages.partial', $category)
                        @endif    
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