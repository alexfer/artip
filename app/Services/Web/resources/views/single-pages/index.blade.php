@extends('web::index')
@section('title', isset($page['content']['short_title']) ? $page['content']['short_title'] : $page['name'])
@section('content')
<h2 class="title mb-3">{{ isset($page['content']['short_title']) ? $page['content']['short_title'] : $page['name'] }}</h2>
<div class="row">        
    @if(count($children))
    <div class="col-3">
        <div class="card mb-3">
            <div class="card-header">{{ $page['name'] }}</div>
            <div class="card-body h-100">                
                <nav id="sidebar" class="m-0">
                    <ul class="list-unstyled">
                    @foreach($children as $child)                        
                        @include('web::single-pages.partial', $child)                        
                    @endforeach
                    </ul>
                </nav>                
            </div>
        </div>
    </div>
    @endif
    <div class="col-{{ count($children) ? 9 : 12}}">
        {!! $page['content']['content'] !!}
    </div>
</div>
@endsection