@if($category['parent_id'])
<table class="table children-node">
    <tbody>
        <tr>
            <td class="col-lg-3"></td>
            <td class="col-lg-3">{!! str_repeat('&ndash;', count($category['ancestors'])) !!} {{ $category['name'] ?? '' }}</td>
            <td class="col-lg-5">{{ $category['slug'] ?? '' }}</td>
            <td class="col-lg-1">
                <a class="pull-left" href="{{ route('category.edit', ['id' => $category['id']]) }}">
                    <span data-feather="edit"></span>
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endif
@if(count($category['children']))
    @foreach($category['children'] as $category)
        @include('admin::category.children',$category)
    @endforeach
@endif