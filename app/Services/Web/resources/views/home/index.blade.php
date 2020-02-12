@extends('web::index')
@section('title', _i('Home'))
@section('content')
@include('web::widgets.home-text')
    
<div class="row mb-2">
    @foreach($news as $item)
    <div class="col-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">{{ $item->type->display_name }}</strong>
                <h3 class="mb-0">
                    <a class="text-dark cut-text" title="{{ $item->short_title }}" href="{{ route('news.by.slug', ['id' => $item->id, 'slug' => $item->slug]) }}">{{ $item->short_title }}</a>
                </h3>
                <div class="mb-1 text-muted">{{ date('M d', strtotime($item->created_at)) }}</div>
                <p class="card-text mb-auto" title="{{ $item->long_title }}">{{ mb_strimwidth($item->long_title, 0, 100, '...') }}</p>
                <a href="{{ route('news.by.slug', ['id' => $item->id, 'slug' => $item->slug]) }}">{{ _i('Continue reading') }}</a>
            </div>
            @foreach($item->media as $key => $media)
            <div class="card-img-right flex-auto d-none d-md-block img-responsive" style="width: 200px; height: 242px;background: url({{ asset(\Storage::disk('media')->url(sprintf("240-thumb-%s", $media->file->path))) }}) center no-repeat;"></div>
            @if(!$key) @break @endif
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection
