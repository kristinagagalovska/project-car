<h4>The List Of The Owners:</h4>
<table>
    @foreach($owners as $owner)

        <td><p>{{$owner->firstname}}</p></td>
        <td><p>{{$owner->lastname}}</p></td>
        <td><p>{{$owner->birth}}</p></td>
    @endforeach
</table>

</br><a href="{{url('/add')}}">Add Owner</a>
