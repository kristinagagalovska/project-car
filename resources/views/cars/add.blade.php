<h4>Add a new car:</h4>
@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
<form action="/cars/add" method="post">
    <input name="model" placeholder="Enter a model" type="text"/>
    <input name="mark" placeholder="Enter a mark" type="text"/>
    <input name="manufacture" placeholder="Enter a manufacture" type="text"/>
    <input name="num" placeholder="Enter a registration number" type="text"/>
    <select name="owner">
        <option selected disabled name>Select owner</option>
        @foreach($owners as $owner)
            <option value="{{ $owner->id }}">{{ $owner->firstname }}</option>
        @endforeach
        <option value="">Withoute owner</option>
    </select>
    <input type="submit" name="save">
</form>