@extends("home")
@section("content")
    <form method="post" action="{{route("customer.create")}}">
        @csrf
        <table >
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" class="form-control"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" class="form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" class="form-control"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </td>
            </tr>
        </table>

    </form>
@endsection
