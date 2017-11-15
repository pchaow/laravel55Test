
<form action="{{url('major/create')}}" method="post">
    {{csrf_field()}}
    <label>name :</label>
    <input type="text" name="name"/> <br/>

    <label>description :</label>
    <input type="text" name="desc"/> <br/>

    <button type="submit">Submit</button>
</form>