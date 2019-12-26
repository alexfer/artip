
@include('admin::flash-message')
<form method="post" action="{{ $route }}">
    @if(isset($entry))
    @method('PUT')
    <input name="id" type="hidden" value="{{ $entry['id'] }}">
    @endif
    @csrf
    <div class="card mt-3 h-100">
        <div class="card-body">
            <div class="form-group">
                <label for="short_title">{{ _i('Short Title') }}</label>
                <input name="short_title" id="short_title" type="text" class="form-control" value="{{ isset($entry) ? $entry['short_title'] : old('short_title') }}" required="required">
            </div>
            <div class="form-group">
                <label for="long_title">{{ _i('Long Title') }}</label>
                <input name="long_title" id="long_title" type="text" class="form-control" value="{{ isset($entry) ? $entry['long_title'] : old('long_title') }}">
            </div>
            <div class="form-group">
                <label for="content_type_id">{{ _i('Content Type') }}</label>
                <select name="content_type_id" id="content_type_id" class="form-control">
                    @foreach($types as $type)
                    <option value="{{ $type['id'] }}" {{ $type['id'] == (isset($entry) ? $entry['content_type_id'] : old('content_type_id')) ? "selected=selected" : '' }}>{{ $type['display_name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">{{ _i('Content') }}</label>
                <textarea rows="12" name="content" id="content" class="form-control">{{ isset($entry) ? $entry['content'] : old('content') }}</textarea>
            </div>
        </div>
    </div>    
    <div class="row mt-4">
        <div class="col-12 text-right">
            @if(isset($entry) && $entry['deleted_at'])
            <span class="text-danger">{{ _i('Deleted at:') }} {{ date('H:i d M Y', strtotime($entry['deleted_at'])) }}</span>            
            @else
            <button type="submit" class="btn btn-primary">{{ _i('Save') }}</button>
            @endif
        </div>
    </div>
</form>
@section('custom-scripts')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea#content',
        language: '{{ LaravelGettext::getLocaleLanguage() }}',
        plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help code',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat | code',
        setup: function (editor) {
            editor.on('change', function () {
                tinymce.triggerSave();
            });
        }
    });
</script>
@append