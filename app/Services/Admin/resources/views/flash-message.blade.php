<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $message)
    @if(Session::has('alert-' . $message))
    <p class="alert alert-{{ $message }}">
        {{ Session::get('alert-' . $message) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </p>    
    @endif
    @endforeach
</div>
