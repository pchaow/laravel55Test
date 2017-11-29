
<form action="{{url('major/'.$major->id.'/edit')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" value="{{$major->id}}" name="id"/>
    <label>name :</label>
    <input type="text" name="name" value="{{$major->name}}"/> <br/>

    <label>description :</label>
    <input type="text" name="desc" value="{{$major->desc}}"/> <br/>

    <button type="submit">Submit</button>
</form>

<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Quantity</td>
        <td>Action</td>
    </tr>
    </thead>

    <tbody>
    @foreach($major->products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->quantity}}</td>
        <td>
            Edit
            <a href="{{url("/major/$major->id/product/$product->id/delete")}}">
                Delete
            </a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<hr/>
<h2>Add Product Form</h2>
<form action="{{url("/major/$major->id/product")}}" method="post">
    {{csrf_field()}}
    Name : <input type="text" name="name"> <br/>
    Quantity : <input type="number" name="quantity"/> <br/>
    <button type="submit">Add Product</button>
</form>











