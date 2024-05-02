@extends('layout.auth')
@section('form')
    <h2>Sign in</h2>
    <form class="card" method="POST" action="/signup">
        @csrf
        <div class="card-body">
            FIRST NAME :<input class="form-control" name="fname" type="text"/>
            LAST NAME :<input class="form-control" name="lname" type="text"/>
            ADDRESS :<input class="form-control" name="address" type="text"/>
            PHONE NUMBER : <input class="form-control" name="phone" type="text" required />
            EMAIL : <input class="form-control" name="email" type="text" required />
            PASSWORD : <input class="form-control " name="password" type="password" type="text" required />
        </div>
        <button class="btn btn-primary " type="submit">Sign in</button>
    </form>
@endsection