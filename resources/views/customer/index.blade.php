@extends("home")
@section("content")
    <h1>Chào mừng admin đến với website</h1>
    <br>
    <a class="btn btn-outline-primary" href="{{route('customer.create')}}">Create</a>
    <a class="btn btn-outline-primary" href="{{route("customer.show")}}">List</a><br>
    <a class="btn btn-outline-primary" href="{{route("login-demo")}}">Log Out</a>

@endsection
