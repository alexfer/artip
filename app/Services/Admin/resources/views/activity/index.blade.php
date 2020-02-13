@extends('admin::index')
@section('content')
<div class="row">    
    <h1 class="h2">{{ _i('Activity Log') }}</h1>
</div>
<div class="justify-content-between">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">{{ _i('Date') }}</th>
                <th scope="col">{{ _i('Message') }}</th>
                <th scope="col">{{ _i('User') }}</th>
                <th scope="col">{{ _i('Action') }}</th>                
            </tr>
        </thead>
        <tbody>
            @forelse($collection as $row)
            <tr>
                <td>
                    <code>{{ date('d M Y H:i', strtotime($row->created_at)) }}</code>
                </td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->causer ? $row->causer->name : _i('Unknown') }}</td>
                <td>{{ $row->log_name }}</td>                
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