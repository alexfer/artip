@extends('admin::index')
@section('content')
<h1 class="h2">{{ _i('Create New Category') }}</h1>
@include('admin::flash-message')
<div class="justify-content-between">
    @include('admin::category.form', ['route' => route('category.create')])
</div>
@endsection 
