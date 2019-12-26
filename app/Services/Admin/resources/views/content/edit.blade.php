@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Edit Entry') }}</h1>
    </div>
    <div class="col-6 text-right">
        <button data-url="{{ !$entry['is_published'] ? route('content.publish', ['id' => $entry['id']]) : route('content.unpublish', ['id' => $entry['id']]) }}" id="visible" type="button" class="btn btn-success">{{ !$entry['is_published'] ? _i('Publish') : _i('Unpublish') }}</button>
        @if($entry['deleted_at'])
        <button data-toggle="modal" data-target="#confirm" data-url="{{ route('content.restore', ['id' => $entry['id']]) }}" type="button" class="btn btn-secondary" id="delete">{{ _i('Restore') }}</button>
        @else
        <button data-toggle="modal" data-target="#confirm" data-url="{{ route('content.delete', ['id' => $entry['id']]) }}" type="button" class="btn btn-danger" id="delete">{{ _i('Delete') }}</button>
        @endif
    </div>
</div>
<div class="justify-content-between">
    @include('admin::content.form', ['route' => route('content.update', ['id' => $entry['id']])])
</div>
@include('admin::confirm')
@section('custom-scripts')
<script>
    $(function () {
        $('#visible').on('click', function () {
            let self = $(this),
                    url = self.attr('data-url');
            $.get(url, function (response) {
                self.attr('data-url', response.url);
                self.html(response.label);
            });
        });
        $('#restore, #delete').on('click', function () {
            let self = $(this);
            $('#confirm').find('.btn-ok').on('click', function (e) {
                e.preventDefault();
                $.get(self.data('url'), function () {
                    window.location.href = "{{ route('content.get', ['id' => $entry['id']]) }}";
                });
            });
        });
    });
</script>
@append
@endsection
