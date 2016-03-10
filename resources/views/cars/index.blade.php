<h4>The List Of The Cars:</h4>
<table>
    @foreach($cars as $car)
        <tr>
            <td><p>{{$car->model}}</p></td>
            <td><p>{{$car->mark}}</p></td>
            <td><p>{{$car->manufacture}}</p></td>
            <td><p>{{$car->num}}</p></td>
            <td><p>{{$car->owner_id}}</p></td>
        </tr>
    @endforeach
</table>