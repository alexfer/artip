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
                    <a href="{{ asset("storage/$file->path") }}" data-size="{{ $file->size }}" data-ext="{{ $file->extension }}" data-mime="{{ $file->mime }}" class="display-image-data d-block mb-4 h-100">
                        @if(in_array($file->extension, ['gif', 'jpg', 'jpeg', 'png']))
                        <img class="img-fluid img-thumbnail" src="{{ asset("storage/$file->path") }}" alt="{{ $file->name }}" title="{{ $file->name }}">
                        @else
                        <img class="img-fluid img-thumbnail" data-src="holder.js/300x200?auto=yes&textmode=exact" data-holder-rendered="true">
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
<div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="preview" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">        
        <div class="modal-content">            
            <div class="modal-header">
                <h5 class="modal-title">{{ _i('File Preview') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="container-fluid">
                    <img src="" id="imagepreview" style="width: 400px; height: 100%;">
                    <hr>
                    <input id="url" type="text" class="form-control" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@section('custom-scripts')
<script src="{{ asset('js/holder.min.js') }}"></script>
<script>
$(function () {
    $(".display-image-data").on("click", function (e) {
        e.preventDefault();
        $('#imagepreview').attr('src', $(this).children('img').attr('src'));
        $('#url').attr('value', $(this).attr('href'));
        $('#preview').modal('toggle');
    });
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
