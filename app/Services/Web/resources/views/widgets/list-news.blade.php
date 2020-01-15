<ul class="list-unstyled">
    @foreach($news as $item)
    <li class="media pb-3">
        <p class="media-body pb-3 mb-0 small border-bottom border-gray">   
            <small class="d-block my-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}</small>
            <a href="#" class="d-block text-black h6" title="{{ $item->short_title }}">{{ $item->short_title }}</a>            
            {{ $item->long_title }}
        </p>
    </li>
    @endforeach
</ul>