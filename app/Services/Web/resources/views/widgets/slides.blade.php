<div id="carousel-indicators" class="carousel slide text-white rounded bg-dark mb-2">
    <ol class="carousel-indicators">
        @foreach($slides as $key => $slide)
            @foreach($slide->media as $i => $media) 
                <li data-target="#carousel-indicators" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class=active' : null }}></li>
                @if($i == 0) @break @endif
            @endforeach
        @endforeach
    </ol>    
    <div class="carousel-inner" role="listbox">
        @foreach($slides as $key => $slide)
            @foreach($slide->media as $i => $media) 
            <div class="carousel-item transbox {{ !$key ? ' active' : null }}">
                <img class="d-block w-100 img-caruusel" src="{{ asset(\Storage::disk('media')->url($media->file->path)) }}" alt="{{ $slide->short_title }}">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1 class="display-4 font-italic">{{ $slide->short_title }}</h1>
                    <p class="lead my-3">{{ $slide->long_title }}</p>
                    <p class="lead mb-0">
                        <a href="#" class="text-white font-weight-bold">{{ _i('Continue reading') }}...</a>
                    </p>
                </div>
            </div>
            @if($i == 0) @break @endif
            @endforeach
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carousel-indicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ _i('Previous') }}</span>
    </a>
    <a class="carousel-control-next" href="#carousel-indicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ _i('Next') }}</span>
    </a>
</div>