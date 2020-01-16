<div class="row text-center mx-2">
    @foreach($collection as $file)    
    <a href="#" class="insert-media mb-2 h-100">
        <input type="hidden" name="media[]" value="{{ $file->id }}">
        @if(in_array($file->extension, ['gif', 'jpg', 'jpeg', 'png']))
        <img class="img-thumbnail mr-2" src="{{ asset("storage/media/50-thumb-$file->path") }}" alt="{{ $file->name }}" title="{{ $file->name }}">
        @else
        <img class="img-thumbnail mr-2" data-src="holder.js/50x50?auto=yes&textmode=exact" data-holder-rendered="true">
        @endif
    </a>
    @endforeach
</div>
<div class="small">    
    {{ $collection->links() }}    
</div>
<script src="{{ asset('js/holder.min.js') }}"></script>
<script>
$(function () {
    $('.insert-media').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('insert-media').addClass('remove-media');
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