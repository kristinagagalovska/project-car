<h4>The List Of The Cars:</h4>
<table>
    <tr>
        <td>Model</td>
        <td>Mark</td>
        <td>Manufacture</td>
        <td>Registration number</td>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td><p>{{$car->model}}</p></td>
            <td><p>{{$car->mark}}</p></td>
            <td><p>{{$car->manufacture}}</p></td>
            <td><p>{{$car->num}}</p></td>
        </tr>
    @endforeach

</table>