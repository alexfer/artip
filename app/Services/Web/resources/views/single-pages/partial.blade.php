@if($category['parent_id'])
<li>
    <a href="{{ route('single.by.slug', ['slug' => $category['slug']]) }}">{{ $category['name'] }}</a>
</li>
@endif
@if (count($category['children']) > 0)
<ul class="children-node">
    @foreach($category['children'] as $category)
        @include('web::single-pages.partial', $category)
    @endforeach
</ul>
@endif
