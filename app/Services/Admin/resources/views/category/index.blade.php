@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Categories') }}</h1>
    </div>
    <div class="col-6 text-right">
        <a role="button" class="btn btn-success" href="{{ route('content.form') }}">{{ _i('Create') }}</a>
    </div>
</div>
@endsection