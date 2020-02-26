@extends('web::index')
@section('title', $page['short_title'])
@section('description', $page['long_title'])
@section('content')
<h2 class="title my-3">{{ $page['short_title'] }}</h2>
<div class="row h-100">    
    <div class="col-3">        
        <div class="p-2">
            @include('web::widgets.list-news', ['news' => $news])
        </div>
    </div>    
    <div class="col-9">
        @if($page['content'])
        <div class="text-muted ml-2 mb-2">{{ date('m.d.Y'), strtotime(isset($page['date']) ? $page['date'] : $page['created_at']) }}</div>
            @if(count($page['media']))
                @foreach($page['media'] as $key => $media)
                    @if(in_array($media['file']['extension'], ['png', 'jpg', 'jpeg', 'gif']))
                    <div class="mx-auto text-center">
                        <img class="rounded mb-3 img-fluid img-responsive img-scalable" src="{{ asset(\Storage::disk('media')->url(sprintf("800-thumb-%s", $media['file']['path']))) }}" alt="{{ $page['short_title'] }}" title="{{ $page['short_title'] }}">
                    </div>    
                    @endif
                @if(!$key) @break @endif
                @endforeach
            @endif
            {!! $page['content'] !!}
        @else
            @include('web::single-pages.coming-soon')
        @endif
    </div>
</div>
@endsection
