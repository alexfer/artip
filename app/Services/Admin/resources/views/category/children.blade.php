@foreach($children as $child)
<table class="table children-node">
    <tbody>
        <tr class="row">
            <td class="col-lg-3"></td>
            <td class="col-lg-3">{{ $child->name ?? '' }}</td>
            <td class="col-lg-5">{{ $child->slug ?? '' }}</td>
            <td class="col-lg-1">
                <a class="pull-left" href="{{ $child->id }}">
                    <i class="fa fa-lg fa-cog"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endforeach
