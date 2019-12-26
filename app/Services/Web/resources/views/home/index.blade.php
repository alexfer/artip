@extends('web::index')
@section('title', _i('Home'))
@section('content')
@include('web::widgets.feature-news')
<div class="row mb-2">
    @foreach($news as $item)
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">{{ $item->category->display_name }}</strong>
                <h3 class="mb-0">
                    <a class="text-dark cut-text" title="{{ $item->short_title }}" href="#">{{ $item->short_title }}</a>
                </h3>
                <div class="mb-1 text-muted">{{ date('M d', strtotime($item->created_at)) }}</div>
                <p class="card-text mb-auto" title="{{ $item->long_title }}">{{ mb_strimwidth($item->long_title, 0, 90, '...') }}</p>
                <a href="#">{{ _i('Continue reading') }}</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block img-responsive" alt="Thumbnail [200x250]" style="width: 200px; height: 245px;" src="{{ asset('storage/media/picture-1.jpg') }}" data-holder-rendered="true">
        </div>
    </div>
    @endforeach
</div>
@endsection
