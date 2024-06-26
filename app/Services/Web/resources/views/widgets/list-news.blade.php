<ul class="list-unstyled">
    @foreach($news as $item)
    <li class="media pb-3">
        <p class="media-body pb-3 mb-0 small border-bottom border-gray">
            <small class="d-block my-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}</small>
            <a href="{{ route('news.by.slug', ['id' => $item->id, 'slug' => $item->slug]) }}" class="d-block text-black h6 mb-3" title="{{ $item->short_title }}">{{ $item->short_title }}</a>
            @foreach($item->media as $key => $media)
                @if(in_array($media->file->extension, ['png', 'jpg', 'jpeg', 'gif']))
                <img class="rounded float-left mr-2 mb-1" src="{{ asset(\Storage::disk('media')->url(sprintf("50-thumb-%s", $media->file->path))) }}">
                @endif
            @if(!$key) @break @endif
            @endforeach
            {{ $item->long_title }}
        </p>
    </li>
    @endforeach
</ul>