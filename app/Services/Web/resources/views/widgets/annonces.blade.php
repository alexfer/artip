<div id="accordion">
    @foreach($annonces as $key => $item)
    <div class="card mb-2">
        <div class="card-header" id="heading-{{ $item['id'] }}}">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{ $item['id'] }}" aria-expanded="{{ !$key ? 'true' : 'false' }}" aria-controls="collapse-{{ $item['id'] }}">
                    {{ $item['short_title'] }}
                </button>
            </h5>
        </div>
        <div id="collapse-{{ $item['id'] }}" class="collapse{{ !$key ? ' show' : null }}" aria-labelledby="heading-{{ $item['id'] }}" data-parent="#accordion">
            <div class="card-body pt-1">
                @if($item['date'])
                <div class="text-muted">{{ date('d.m.Y', strtotime($item['date'])) }}</div>
                @endif
                {{ $item['long_title'] }}
            </div>
        </div>
    </div> 
    @endforeach
</div>
