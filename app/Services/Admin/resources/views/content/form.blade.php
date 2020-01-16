
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
                    <option data-service-name="{{ $type['service_name'] }}" value="{{ $type['id'] }}" {{ $type['id'] == (isset($entry) ? $entry['content_type_id'] : old('content_type_id')) ? "selected=selected" : '' }}>{{ $type['display_name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date">{{ _i('Date') }}</label>
                <input name="date" id="date" type="text" class="form-control" value="{{ isset($entry) ? $entry['date'] : old('date') }}">
            </div>
            @if(config('content-types.annonces') !=  (isset($entry) ? $entry['content_type_id'] : null))
            <div class="form-group category_id_block">
                <label for="category_id">{{ _i('Category') }}</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">{{ _i('Category') }}</option>
                    @foreach($categories as $category)
                        @include('admin::category.children-option', $category)
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">{{ _i('Content') }}</label>
                <textarea rows="12" name="content" id="content" class="form-control">{{ isset($entry) ? $entry['content'] : old('content') }}</textarea>
            </div>
            @endif
        </div>
    </div>
    @if(config('content-types.annonces') != (isset($entry) ? $entry['content_type_id'] : null))
    <div class="card mt-3 h-100">
        <div class="card-header">{{ _i('Media') }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-9" id="media-content">
                    @if(isset($entry))
                        @foreach($entry['media'] as $media)
                        <a href="#" class="remove-media mb-2 h-100">
                            <input type="hidden" name="media[]" value="{{ $media['file']['id'] }}">
                            @if(in_array($media['file']['extension'], ['gif', 'jpg', 'jpeg', 'png']))
                            <img class="figure-img img-thumbnail mr-2" src="{{ asset("storage/media/50-thumb-{$media['file']['path']}") }}" alt="{{ $media['file']['name'] }}" title="{{ $media['file']['name'] }}">
                            @else
                            <img class="img-thumbnail mr-2" data-src="holder.js/50x50?auto=yes&textmode=exact" data-holder-rendered="true" alt="{{ $media['file']['name'] }}" title="{{ $media['file']['name'] }}">
                            @endif
                        </a>
                        @endforeach
                    @endif
                </div>
                <div class="col-3 text-right">
                    <button data-toggle="modal" data-target="#media" type="button" class="btn btn-success media-files">{{  _i('Attach Media') }}</button>
                </div>
            </div>
        </div>
    </div>
    @endif
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
@include('admin::content.media')
@section('custom-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
@append
@section('custom-scripts')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('js/holder.min.js') }}"></script>
<script>
    $(function() {
        $('.media-files').on('click', function() {
            $.get("{{ route('media.content') }}", function(response) {
                $('#media').find('.modal-body').html(response);
            });
        });
        $('.remove-media').on('click', function(e) {
            e.preventDefault();
            $(this).remove();
        });
    });
    $('#date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    $('#date').datepicker("setDate", {{ isset($entry) ? $entry['date'] : 'new Date()' }});
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