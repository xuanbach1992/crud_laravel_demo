@extends("home")
@section("content")
    <a href="{{route("customer.index")}}">Go Back</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key=>$customer)
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td>{{$customer->name}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->email}}</td>
                <td class="btn btn-outline-secondary"><a href="{{route("customer.edit",$customer->id)}}">Edit</a></td>
                <td class="btn btn-outline-danger"><a href="{{route("customer.delete",$customer->id)}}"
                   onclick="return confirm('You are sure?')" >Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
