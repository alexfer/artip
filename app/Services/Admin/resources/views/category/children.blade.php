@foreach($children as $child)
<table class="table children-node">
    <tbody>
        <tr>
            <td class="col-lg-3"></td>
            <td class="col-lg-3">{{ $child['name'] ?? '' }}</td>
            <td class="col-lg-5">{{ $child['slug'] ?? '' }}</td>
            <td class="col-lg-1">
                <a class="pull-left" href="{{ route('category.edit', ['id' => $child['id']]) }}">
                    <span data-feather="edit"></span>
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endforeach
