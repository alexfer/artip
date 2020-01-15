<option value="{{ $category['id'] }}"{{ $category['id'] == (isset($entry) && isset($entry['category']) ? $entry['category']['id'] : old('category_id')) ? "selected=selected" : '' }}>{!! str_repeat('&ndash;', count($category['ancestors'])) !!} {{ $category['name'] ?? '' }}</option>
@if(count($category['children']) > 0)
    @foreach($category['children'] as $category)
        @include('admin::category.children-option', $category)
    @endforeach
@endif