<h4>Edit Car:</h4>
<form action="" method="post">
    <input name="model" value="{{$car->model}}" type="text"/>
    <input name="mark" value="{{$car->mark}}" type="text"/>
    <input name="manufacture" value="{{$car->manufacture}}" type="text"/>
    <input name="num" value="{{$car->num}}" type="text"/>
    <select name="owner" value="{{$car->owner_id}}">
        <option selected disabled name>Select owner</option>
        @foreach($owners as $owner)
            <option value="{{ $owner->id }}">{{$owner->firstname}}</option>
        @endforeach
        <option value="">Withoute owner</option>
    </select>
    <input type="submit" name="save" value="update">
</form>