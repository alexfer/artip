@extends('admin::index')
@section('content')
<div class="row">
    <div class="col-6">
        <h1 class="h2">{{ _i('Media') }}</h1>
    </div>
    <div class="col-6 text-right">
        <label class="btn btn-success" for="file-selector">
            <input id="file-selector" type="file" class="d-none" name="files" multiple="multiple">
            {{ _i('Upload') }}
        </label>
    </div>
</div>
@include('admin::flash-message')
<div class="justify-content-between">
    <div class="card mt-3 h-100">
        <div class="card-body">
            <div class="row text-center text-lg-left">
                @foreach($collection as $file)
                <div class="col-lg-3 col-md-4 col-6 text-center">
                    <a href="#" data-size="{{ $file->size }}" data-ext="{{ $file->extension }}" data-mime="{{ $file->mime }}" class="d-block mb-4 h-100">
                        @if(in_array($file->extension, ['gif', 'jpg', 'jpeg', 'png']))
                        <img class="img-fluid img-thumbnail" src="{{ asset("storage/$file->path") }}" alt="{{ $file->name }}" title="{{ $file->name }}">
                        @else
                        <img class="img-fluid img-thumbnail" src="holder.js/300x200?auto=yes" data-holder-rendered="true">
                        @endif
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="mt-3">
    {{ $collection->links() }}    
</div>
@section('custom-scripts')
<script src="{{ asset('js/holder.min.js') }}"></script>
<script>
$(function () {
    $('#file-selector').on("change", function () {
        let self = $(this),
                formData = new FormData(),
                url = "{{ route('media.upload') }}";

        for (let i = 0; i < self[0].files.length; ++i) {
            formData.append('files[]', self[0].files[i]);
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                window.location.href = response.redirect;
            }
        });
    });
});
</script>
@append
@endsection
