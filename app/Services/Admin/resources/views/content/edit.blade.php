@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Edit Entry') }}</h1>
    </div>
    <div class="col-6 text-right">
        <button data-url="{{ !$entry['is_published'] ? route('content.publish', ['id' => $entry['id']]) : route('content.unpublish', ['id' => $entry['id']]) }}" id="visible" type="button" class="btn btn-success">{{ !$entry['is_published'] ? _i('Publish') : _i('Unpublish') }}</button>
    </div>
</div>
<div class="justify-content-between">
    @include('admin::content.form', ['route' => route('content.update', ['id' => $entry['id']])])
</div>
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
    });
</script>
@append
@endsection
