
@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="h2">{{ _i('Submission') }}</h1>
    </div>
</div>
<div class="justify-content-between">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">{{ _i('Created') }}</th>
                <th scope="col">{{ _i('Name') }}</th>
                <th scope="col">{{ _i('Status') }}</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($collection as $row)
            <tr>
                <td>{{ date('d M Y', strtotime($row->created_at)) }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ !$row->is_answered ? _i('New') : _i('Answered') }}</td>
                <td>
                    <a href="#">
                        <span class="text-primary" data-feather="send"></span>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="bg-grey text-center">{{ _i('No Content Available') }}</td>
            </tr>
            @endforelse            
        </tbody>
    </table>
</div>
<div class="mt-3">
    {{ $collection->links() }}
</div>
@endsection