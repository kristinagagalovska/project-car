<h4>List Of The Owners:</h4>
<table>
    @foreach($owners as $owner)
        <tr>
            <td><p>{{ $owner->firstname }}</p></td>
            <td><p>{{ $owner->lastname }}</p></td>
            <td><p>{{ $owner->birth }}</p></td>
            <td><p><a href="{{ route('owners.edit', $owner->id) }}">Edit Owner</a></p></td>
            <td><p><a href="{{ route('owners.delete', $owner->id) }}">Delete Owner</a></p></td>
            <td><p><a href="{{ route('owners.view', $owner->id) }}">Show Cars</a></p></td>
            <td><p><a href="{{ route('owners.car', $owner->id) }}">Add New Car</a></p></td>
        </tr>
    @endforeach

</table>

</br><a href="{{ route('owners.add') }}">Add Owner</a>
