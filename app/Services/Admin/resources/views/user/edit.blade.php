@extends('admin::index')
@section('content')
<h1 class="h2">{{ $user['name'] }}</h1>
<div class="justify-content-between">
    @include('admin::user.form', ['route' => route('user.update', ['id' => $user['id']])])
</div>
@endsection    
