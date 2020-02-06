@extends('web::index')
@section('title', _i('Answer on submission'))
@section('content')
<h2 class="title my-3">{{ _i('Answer on submission') }}</h2>
<div class="row h-100">    
    <div class="col-3">        
        <div class="p-2">
            @include('web::widgets.list-news', ['news' => $news])
        </div>
    </div>    
    <div class="col-9">
        <p>
            <strong>{{ _i('Submission') }}</strong>
        </p>
        <blockquote class="blockquote box-shadow">
            <p class="p-4">{{ $submission['question']['message'] }}</p>
        </blockquote>
        <p>
            <strong>{{ _i('Answer') }}</strong>
        </p>
        <blockquote class="blockquote box-shadow">
            <p class="p-4">{{ $submission['message'] }}</p>
        </blockquote>
    </div>
</div>
@endsection