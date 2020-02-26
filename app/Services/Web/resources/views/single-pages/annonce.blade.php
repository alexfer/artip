@extends('web::index')
@section('title', $annonce['short_title'])
@section('description', $annonce['long_title'])
@section('content')
<h2 class="title my-3">{{ $annonce['short_title'] }}</h2>
<div class="row h-100">    
    <div class="col-3">        
        <div class="p-2">
            @include('web::widgets.list-news', ['news' => $news])
        </div>
    </div>    
    <div class="col-9">
        @if($annonce['content'])
        <div class="text-muted ml-2 mb-2">{{ date('m.d.Y'), strtotime(isset($annonce['date']) ? $annonce['date'] : $annonce['created_at']) }}</div>
            {!! $annonce['content'] !!}
        @else
            @include('web::single-pages.coming-soon')
        @endif
    </div>
</div>
@endsection
