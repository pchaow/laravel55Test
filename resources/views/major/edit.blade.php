
<form action="{{url('major/'.$major->id.'/edit')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" value="{{$major->id}}" name="id"/>
    <label>name :</label>
    <input type="text" name="name" value="{{$major->name}}"/> <br/>

    <label>description :</label>
    <input type="text" name="desc" value="{{$major->desc}}"/> <br/>

    <button type="submit">Submit</button>
</form>