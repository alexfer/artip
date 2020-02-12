@extends('admin::index')
@section('content')
<h1 class="h2">{{ _i('Dashboard') }}</h1>
<div class="card mt-3 h-100">
    <div class="card-body pb-0">
        <div class="form-group">
            <label for="public_dir">{{ _i('Public Directory') }}</label>
            <input name="public_dir" id="public_dir" type="text" class="form-control" value="{{ public_path() }}">
        </div>
        <div class="form-group">
            <label for="root_dir">{{ _i('Root Directory') }}</label>
            <input name="root_dir" id="root_dir" type="text" class="form-control" value="{{ base_path() }}">
        </div>
        <div class="form-group">
            <label for="storage_dir">{{ _i('Storage Directory') }}</label>
            <input name="storage_dir" id="storage_dir" type="text" class="form-control" value="{{ storage_path() }}">
        </div>
        <div class="form-group">
            <label for="storage_app_dir">{{ _i('Storage Application Directory') }}</label>
            <input name="storage_app_dir" id="storage_app_dir" type="text" class="form-control" value="{{ storage_path('app') }}">
        </div>
        <div class="row mt-4">
            <div class="col-12 text-right">            
                <button type="submit" id="db-migrate" class="btn btn-primary">{{ _i('Migrate') }}</button>            
            </div>
        </div>
    </div>
</div>
@section('custom-scripts')
<script>
    $(function() {
        $('#storage-link').on('click', function() {
            $.get("{{ route('storage-link') }}", function(response) {
                alert(response.message);
            });
        });
        $('#db-migrate').on('click', function() {
            $.get("{{ route('db-migrate') }}", function(response) {
                alert(response.message);
            });
        });
    });
</script>
@append
@endsection