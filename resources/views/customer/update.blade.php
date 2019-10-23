@extends("home")
@section("content")
    <form method="post" action="{{route("customer.edit",$customer->id)}}">
        @csrf
        <table >
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" class="form-control"value="{{$customer->name}}"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" class="form-control"value="{{$customer->address}}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" class="form-control"value="{{$customer->email}}"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">Update</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
