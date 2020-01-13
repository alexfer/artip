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
    <table class="table table-striped mb-0">
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
                    <td class="bg-grey text-center">{{ _i('No Content Available') }}</td>
                </tr>
            </tbody>
        </table>
        @endforelse
    </div>
</div>
@section('custom-scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('#sortable-categories').sortable({
            placeholder: "ui-state-highlight",
            tolerance: 'pointer',
            update: function (e, ui) {
                var jsonData = [];
                $('#sortable-categories .category-node').each(function (index, value) {
                    jsonData.push({"id": $(value).data('id')});
                });
                $.ajax({
                    url: '/categories/rebuild-tree',
                    type: 'PATCH',
                    dataType: 'json',
                    async: false,
                    data: JSON.stringify(jsonData)
                });
            }
        });
        $('#sortable-categories').disableSelection();
    });
</script>
@append
@endsection