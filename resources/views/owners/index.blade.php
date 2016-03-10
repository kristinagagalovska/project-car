<h4>The List Of The Owners:</h4>
<ul>
    @foreach($owners as $owner)
        <li>
            <p>{{$owner->firstname}}</p>
            <p>{{$owner->lastname}}</p>
            <p>{{$owner->birth}}</p>
        </li>
    @endforeach
</ul>
<a href="{{url('/new')}}">Add Owner</a>
