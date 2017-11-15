<a href="{{url('/major/create')}}">Create</a>

<table>
    <thead>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Desc</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($majors as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->name}}</td>
        <td>{{$m->desc}}</td>
        <td>
            <a href="{{url("/major/{$m->id}/edit")}}">Edit</a>
            <form action="{{url('major/'.$m->id.'/delete')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" value="{{$m->id}}" name="id"/>
                <button type="submit">Delete</button>
            </form>

        </td>
    </tr>
    @endforeach
    </tbody>

</table>