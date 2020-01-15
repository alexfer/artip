<option value="{{ $category['id'] }}" {{ $category['id'] == old('category') ? "selected=selected" : null }}>{!! str_repeat('&ndash;', count($category['ancestors'])) !!} {{ $category['name'] ?? '' }}</option>
@if(count($category['children']) > 0)
    @foreach($category['children'] as $category)
        @include('admin::category.children-option', $category)
    @endforeach
@endif