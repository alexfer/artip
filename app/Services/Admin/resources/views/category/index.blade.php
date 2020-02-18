@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Categories') }}</h1>
    </div>
    <div class="col-6 text-right">
        <a role="button" class="btn btn-success" href="{{ route('category.form') }}">{{ _i('Create') }}</a>
    </div>
</div>
@include('admin::flash-message')
<div class="justify-content-between">
    <table class="table table-striped mb-0">
        <thead class="thead-dark">
            <tr>
                <th class="col-lg-3">{{ _i('Category') }}</th>
                <th class="col-lg-3">{{ _i('Sub Category') }}</th>
                <th class="col-lg-5">{{ _i('Slug') }}</th>
                <th class="col-lg-1">{{ _i('Edit') }}</th>
            </tr>
        </thead>
    </table>
    <div id="sortable-categories">
        @forelse($categories as $key => $category)
        <div class="category-node" data-id="{{ $category['id'] }}">
            <table class="table primary-category">
                <tbody>
                    <tr>
                        <td class="col-lg-3">{{ $category['name'] ?? '' }}</td>
                        <td class="col-lg-3">
                            <a href="#" class="category-children">
                                <span data-feather="chevron-right"></span>
                            </a>
                        </td>
                        <td class="col-lg-5">{{ str_limit($category['slug'], 45, '...') }}</td>
                        <td class="col-lg-1">
                            <a class="pull-left" href="{{ route('category.edit', ['id' => $category['id']]) }}">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>            
            @include('admin::category.children',$category)            
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
                url: "{{ route('categories.rebuild-tree') }}",
                type: 'POST',
                dataType: 'json',
                async: false,
                data: JSON.stringify(jsonData),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    });
    $('#sortable-categories').disableSelection();
    $('.category-children').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.category-node').children('.children-node').toggle('visible hidden');
    });
});
</script>
@append
@section('custom-css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@append
@endsection