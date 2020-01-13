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
<div class="justify-content-between">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="col-1">{{ _i('Category') }}</th>
                <th class="col-1">{{ _i('Sub Category') }}</th>
                <th class="col-1">{{ _i('Edit') }}</th>
            </tr>
        </thead>
    </table>
    <div id="sortable-categories">
        @forelse($categories as $key => $category)
        <div class="category-node" data-id="{{ $category['id'] }}">
            @if(count($category['children']))
            @include('admin::category.children',['children' => $category->children])                
            @endif
        </div>
        @empty
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td class="text-center alert-info">{{ _i('No Content Available') }}</td>
                </tr>
            </tbody>
        </table>
        @endforelse
    </div>
</div>
</div>
@endsection