@extends('admin::index')
@section('content')
<h1 class="h2">{{ _i('Create New User') }}</h1>
<div class="justify-content-between">
    @include('admin::user.form', ['route' => route('user.form')])
</div>
@endsection 
