<h4>The List Of The Cars:</h4>
<table>
    <tr>
        <td>Model</td>
        <td>Mark</td>
        <td>Manufacture</td>
        <td>Registration number</td>
        <td>Owner ID</td>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td><p>{{ $car->model }}</p></td>
            <td><p>{{ $car->mark }}</p></td>
            <td><p>{{ $car->manufacture }}</p></td>
            <td><p>{{ $car->num }}</p></td>
            <td><p>{{ $car->owner_id }}</p></td>
            <td><p><a href="{{ url('cars/edit', $car->id) }}">Edit Car</a></p></td>
            <td><p><a href="{{  url('cars/delete', $car->id) }}">Delete Car</a></p></td>
        </tr>
    @endforeach

</table>

</br><a href="{{ url('cars/add') }}">Add Car</a>