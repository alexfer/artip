<li>
    <a href="{{ route('single.by.slug', ['slug' => $child['slug']]) }}" class="card-link">{{ $child['name'] }}</a>
</li>
@if (count($child['children']) > 0)
<ul class="children-node">
    @foreach($child['children'] as $child)
        @include('web::single-pages.partial', $child)
    @endforeach
</ul>
@endif
