<h4>Edit The Owners:</h4>
<form action="/edit/{{$owner->id}}" method="post">
    <input name="firstname" value="{{$owner->firstname}}" type="text"/>
    <input name="lastname" value="{{$owner->lastname}}" type="text"/>
    <input name="birth" value="{{$owner->birth}}" type="date"/>
    <input type="submit" name="save" value="update"/>
</form>