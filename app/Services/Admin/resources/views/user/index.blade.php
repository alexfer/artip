@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Users') }}</h1>
    </div>
    <div class="col-6 text-right">
        <a role="button" class="btn btn-success" href="{{ route('user.form') }}">{{ _i('Create') }}</a>
    </div>
</div>
<div class="justify-content-between">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">{{ _i('Created') }}</th>
                <th scope="col">{{ _i('Name') }}</th>
                <th scope="col">{{ _i('Language') }}</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ date('d M Y', strtotime($user->created_at)) }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $languages[$user->locale] }}</td>
                <td>
                    <a href="{{ route('user.get', ['id' => $user->id]) }}" title="{{ _i('Edit') }}">
                        <span data-feather="edit"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-3">
    {{ $users->links() }}
</div>
@endsection
