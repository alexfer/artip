@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Website content') }}</h1>
    </div>
    <div class="col-6 text-right">
        <a role="button" class="btn btn-success" href="{{ route('content.form') }}">{{ _i('Create') }}</a>
    </div>
</div>
<div class="justify-content-between">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">{{ _i('Created') }}</th>
                <th scope="col">{{ _i('Category') }}</th>
                <th scope="col">{{ _i('Short Title') }}</th>
                <th scope="col">{{ _i('Status') }}</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($collection as $row)
            <tr {!! $row->deleted_at ? 'class="text-muted"' : null !!}>
                <td>{{ date('d M Y', strtotime($row->created_at)) }}</td>
                <td>{{ $row->category->display_name }}</td>
                <td>
                    @if($row->is_published)
                        {{ $row->short_title }}
                    @else    
                        <strike>{{ $row->short_title }}</strike>
                    @endif    
                </td>
                <td>{{ $row->is_published ? _i('Published') : _i('Hidden') }}</td>
                <td>                    
                    <a href="{{ route('content.get', ['id' => $row->id]) }}" title="{{ _i('Edit') }}">
                        @if($row->deleted_at)
                        <span class="text-danger" data-feather="trash"></span>
                        @else
                        <span data-feather="edit"></span>
                        @endif
                    </a>                    
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="bg-grey text-center">{{ _i('No Content Available') }}</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-3">
    {{ $collection->links() }}
</div>
@endsection