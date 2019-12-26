@extends('admin::index')
@section('content')
<h1 class="h2">{{ _i('Create New Entry') }}</h1>
<div class="justify-content-between">
    @include('admin::content.form', ['route' => route('content.create')])
</div>
@endsection 
