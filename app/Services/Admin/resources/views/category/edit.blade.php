@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Edit Category') }}</h1>
    </div>
</div>
@include('admin::flash-message')
<div class="justify-content-between">
    <form method="post" action="{{ route('category.update', ['id' => $category['id']]) }}">
        <input type="hidden" name="_method" value="PUT">    
    @csrf
    <div class="card mt-3 h-100">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-4" for="name">{{ _i('Name Category:') }}</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category['name'] }}">
                </div>
            </div>            
        </div>
    </div>   
    <div class="row mt-4">
        <div class="col-12 text-right">            
            <button type="submit" class="btn btn-primary">{{ _i('Save') }}</button>            
        </div>
    </div>
</form>
</div>
@endsection
