<div class="row text-center mx-2">
    @foreach($collection as $file)    
    <a href="#" class="insert-media mb-2 h-100">
        <input type="hidden" name="media[]" value="{{ $file->id }}">
        @if(in_array($file->extension, ['gif', 'jpg', 'jpeg', 'png']))
        <img class="img-thumbnail mr-2" src="{{ asset("storage/media/50-thumb-$file->path") }}" alt="{{ $file->name }}" title="{{ $file->name }}">
        @else
        <div class="mr-2 fi-size-md fi fi-{{ $file->extension }}" style="float: left">
            <div class="fi-content">{{ $file->extension }}</div>
        </div>
        @endif
    </a>
    @endforeach
</div>
<div class="small">    
    {{ $collection->links() }}    
</div>
<script>
$(function () {
    $('.insert-media').on('click', function (e) {
        e.preventDefault();
        $('#media-content').append($(this));
    });
    $('.page-link').on('click', function (e) {
        e.preventDefault();
        $.get($(this).attr('href'), function (response) {
            $('#media').find('.modal-body').html(response);
        });
    });
});
</script>