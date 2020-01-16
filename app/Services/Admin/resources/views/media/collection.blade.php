<div class="row text-center text-lg-left">
    @foreach($collection as $file)
    <div class="col-1 text-center">
        <a href="#" class="insert-media mb-2 h-100">
            <input type="hidden" name="media[]" value="{{ $file->id }}">
            @if(in_array($file->extension, ['gif', 'jpg', 'jpeg', 'png']))
            <img class="img-thumbnail mr-2" src="{{ asset("storage/media/50-thumb-$file->path") }}" alt="{{ $file->name }}" title="{{ $file->name }}">
            @else
            <img class="img-thumbnail mr-2" data-src="holder.js/50x50?auto=yes&textmode=exact" data-holder-rendered="true">
            @endif
        </a>
    </div>
    @endforeach
</div>
<script src="{{ asset('js/holder.min.js') }}"></script>
<script>
$(function() {
    $('.insert-media').on('click', function(e) {
        e.preventDefault();
        let self = $(this);
        $('#media-content').append($(self));
    });
});
</script>